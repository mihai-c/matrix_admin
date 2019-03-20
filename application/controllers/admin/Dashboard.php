<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/8/2019
	 * Time: 2:00 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Dashboard
	 * Class Dashboard
	 * @property Dashboard $dashboard Dashboard controller
	 */

	class Dashboard extends CI_Controller
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
				"page_title"    => "Matrix Dashboard Admin Panel",
				"title"         => "Dashboard",
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

		/**
		 * Logout method
		 */
		public function logout(){
			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
			$this->output->set_header("Pragma: no-cache");
			redirect('admin', 'refresh');
		}

	}