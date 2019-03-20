<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 3:12 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Errors
	 * Class Errors
	 * @property Errors $errors Errors controller
	 */

	class Errors extends CI_Controller
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

		public function error_403()
		{
			$this->data   = array(
				"page_title"    => "Matrix Error 403 Admin Panel",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class())."/403",
				"custom_js"     => array("register.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js();
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function error_404()
		{
			$this->data   = array(
				"page_title"    => "Matrix Error 404 Admin Panel",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class())."/404",
				"custom_js"     => array("register.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js();
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function error_405()
		{
			$this->data   = array(
				"page_title"    => "Matrix Error 405 Admin Panel",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class())."/405",
				"custom_js"     => array("register.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js();
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function error_500()
		{
			$this->data   = array(
				"page_title"    => "Matrix Error 500 Admin Panel",
				"header"        => FALSE,
				"main_content"  => strtolower(get_class())."/500",
				"custom_js"     => array("register.js")
			);
			$this->set_data->_backend_css();
			$this->set_data->_js();
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}