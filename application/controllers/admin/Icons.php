<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 1:56 PM
	 */

	class Icons extends CI_Controller
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

		public function index(){redirect('admin/icons/material-icons');}

		public function material_icons()
		{
			$this->data   = array(
				"page_title"    => "Matrix Material Icons Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/material",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css();
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js"
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function awesome_icons()
		{
			$this->data   = array(
				"page_title"    => "Matrix Font Awesome Icons Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/awesome",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css();
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js"
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}