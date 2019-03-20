<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 2:09 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Addons
	 * Class Addons
	 * @property Addons $addons Addons controller
	 */

	class Addons extends CI_Controller
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

		public function dashboard()
		{
			$this->data   = array(
				"page_title"    => "Matrix Addons Dashboard 2 Admin Panel",
				"main_content"  => strtolower(get_class())."/dashboard",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"custom_js"     => array()
			);
			$this->set_data->_backend_css(array(
				"libs/fullcalendar/dist/fullcalendar.min.css",
				"extra-libs/calendar/calendar.css",
			));
			$this->set_data->_js(array(
				"dist/js/jquery.ui.touch-punch-improved.js",
				"dist/js/jquery-ui.min.js",
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/moment/min/moment.min.js",
				"libs/fullcalendar/dist/fullcalendar.min.js",
				"dist/js/pages/calendar/cal-init.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function gallery()
		{
			$this->data   = array(
				"page_title"    => "Matrix Addons Gallery Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/gallery",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css(array(
				"libs/magnific-popup/dist/magnific-popup.css"
			));
			$this->set_data->_js(array(
				"dist/js/jquery-ui.min.js",
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/magnific-popup/dist/jquery.magnific-popup.min.js",
				"libs/magnific-popup/meg.init.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function calendar()
		{
			$this->data   = array(
				"page_title"    => "Matrix Addons Calendar Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/calendar",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css(array(
				"libs/fullcalendar/dist/fullcalendar.min.css",
				"extra-libs/calendar/calendar.css",
			));
			$this->set_data->_js(array(
				"dist/js/jquery-ui.min.js",
				"dist/js/jquery.ui.touch-punch-improved.js",
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/moment/min/moment.min.js",
				"libs/fullcalendar/dist/fullcalendar.min.js",
				"dist/js/pages/calendar/cal-init.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function invoice()
		{
			$this->data   = array(
				"page_title"    => "Matrix Addons Invoice Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/invoice",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css();
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		public function chat_option()
		{
			$this->data   = array(
				"page_title"    => "Matrix Addons Chat Option Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class())."/chat",
				"custom_js"     => array()
			);
			$this->set_data->_backend_css();
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}