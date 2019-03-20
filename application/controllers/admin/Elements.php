<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 2:05 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Elements
	 * Class Elements
	 * @property Elements $elements Elements controller
	 */

	class Elements extends CI_Controller
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
				"page_title"    => "Matrix Elements Admin Panel",
				"title"         => "Elements",
				"main_content"  => strtolower(get_class()),
				"custom_js"     => array("elements.js")
			);
			$this->set_data->_backend_css(array("libs/toastr/build/toastr.min.css"));
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/toastr/build/toastr.min.js"
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}