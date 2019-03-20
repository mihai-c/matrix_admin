<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 1:13 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Full_width
	 * Class Full_width
	 * @property Full_width $full_width Full_width controller
	 */

	class Full_width extends CI_Controller
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
				"page_title"    => "Matrix Grid Admin Panel",
				"title"         => "Full Width",
				"main_content"  => strtolower(get_class()),
				"custom_js"     => array()
			);
			$this->set_data->_backend_css(array("libs/flot/css/float-chart.css"));
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/flot/excanvas.js",
				"libs/flot/jquery.flot.js",
				"libs/flot/jquery.flot.pie.js",
				"libs/flot/jquery.flot.time.js",
				"libs/flot/jquery.flot.stack.js",
				"libs/flot/jquery.flot.crosshair.js",
				"libs/flot.tooltip/js/jquery.flot.tooltip.min.js",
				"dist/js/pages/chart/chart-page-init.js"
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}