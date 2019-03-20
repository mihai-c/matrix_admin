<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 3:04 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Register
	 * Class Register
	 * @property Register $register Register controller
	 */

	class Register extends CI_Controller
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
			if (!$this->session->userdata('admin')['is_user_login']){
				redirect('/admin/login');
			}
		}

		public function index()
		{
			$this->data   = array(
				"page_title"    => "Matrix Register Admin Panel",
				"title"         => "Register",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class()),
				"custom_js"     => array("register.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js();
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}