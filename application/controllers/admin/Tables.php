<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 12:59 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Tables
	 * Class Tables
	 * @property Tables $tables Tables controller
	 */

	class Tables extends CI_Controller
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
				"page_title"    => "Matrix Tables Admin Panel",
				"title"         => "Tables",
				"main_content"  => strtolower(get_class()),
				"custom_js"     => array('tables.js')
			);
			$this->set_data->_backend_css(array(
				"libs/flot/css/float-chart.css",
				"extra-libs/multicheck/multicheck.css",
				"libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
			));
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"extra-libs/multicheck/datatable-checkbox-init.js",
				"extra-libs/multicheck/jquery.multicheck.js",
				"extra-libs/DataTables/datatables.min.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}