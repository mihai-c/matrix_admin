<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/8/2019
	 * Time: 2:03 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Dashboard
	 * Class Dashboard
	 * @property Login $login Login controller
	 * @property Login_model $login_model Login_model model
	 */

	class Login extends CI_Controller
	{
		/**
		 * @var $data
		 */
		protected $data = NULL;

		/**
		 * Login constructor.
		 */
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata("is_user_login")){
				redirect("/admin/dashboard");
			}
			$this->load->model("login_model");
		}

		public function index()
		{
			$this->data   = array(
				"page_title"    => "Imob Admin Panel",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class()),
				"custom_js"     => array("login.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js(array("libs/popper.js/dist/umd/popper.min.js"));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function auth()
		{
			$this->load->library("form_validation");
			$this->form_validation->set_error_delimiters("", "");

			$this->form_validation->set_rules('email', 'E-mail','trim|required|min_length[3]|max_length[150]|valid_email',
				array('required'=>'%s este un camp obligatoriu!',
					'min_length'=>'Campul %s trebuie sa contina minim %s caractere!',
					'max_length'=>'Campul %s trebuie sa contina maxim %s caractere!',
					'valid_email'=>'Campul %s trebuie sa fie un e-mail valid!'));
			$this->form_validation->set_rules('passwd', 'Parola','trim|required|min_length[6]|max_length[250]',
				array('required'=>'%s este un camp obligatoriu!',
					'min_length'=>'Campul %s trebuie sa contina minim %s caractere!',
					'max_length'=>'Campul %s trebuie sa contina maxim %s caractere!'));

			if ($this->form_validation->run() == FALSE) {
				$this->index();
			}else{
				$email  = $this->input->post('email',TRUE);
				$passwd = $this->input->post('passwd',TRUE);

				$verify = $this->login_model->_setTable('admin_users')->_auth($email,$passwd);

				if($verify['error'] === TRUE){
					$this->session->set_flashdata('error',$verify['msg']);
					$this->index();
				}else{
					$session    = array('admin' => array(
						'email' 		=> $verify['user']->email,
						'name' 		    => $verify['user']->name,
						'is_user_login' => TRUE,
						'user_id'	 	=> $verify['user']->id,
						'lastlogin' 	=> $validation['user']->last_login,
						'user_type' 	=> $validation['user']->user_type,
					));
					$this->session->set_userdata($session);

					redirect('admin/dashboard');
				}
			}

		}

		public function logout(){

		}

		/**
		 * @param Login $login
		 * @return Login
		 */
		public function setLogin($login)
		{
			$this->login = $login;
			return $this;
		}

		/**
		 * @return Login_model
		 */
		public function getLoginModel()
		{
			return $this->login_model;
		}
	}