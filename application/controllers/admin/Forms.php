<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/19/2019
	 * Time: 1:18 PM
	 * @access public
	 * @subpackage    Controller
	 * @category    Forms
	 * Class Forms
	 * @property Forms $forms Forms controller
	 */

	class Forms extends CI_Controller
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
		public function index(){ redirect('admin/forms/');}

		/**
		 * basic forms
		 */
		public function basic()
		{
			$this->data   = array(
				"page_title"    => "Matrix Basic Form Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class()).'/basic',
				"custom_js"     => array("forms-basic.js")
			);
			$this->set_data->_backend_css(array(
				"libs/select2/dist/css/select2.min.css",
				"libs/jquery-minicolors/jquery.minicolors.css",
				"libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
				"libs/quill/dist/quill.snow.css"
				));
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/inputmask/dist/min/jquery.inputmask.bundle.min.js",
				"dist/js/pages/mask/mask.init.js",
				"libs/select2/dist/js/select2.full.min.js",
				"libs/select2/dist/js/select2.min.js",
				"libs/jquery-asColor/dist/jquery-asColor.min.js",
				"libs/jquery-asGradient/dist/jquery-asGradient.js",
				"libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js",
				"libs/jquery-minicolors/jquery.minicolors.min.js",
				"libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
				"libs/quill/dist/quill.min.js",
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}

		/**
		 * wizard forms
		 */
		public function wizard()
		{
			$this->data   = array(
				"page_title"    => "Matrix Wizard Form Admin Panel",
				"title"         => ucfirst(str_replace("_","-",__FUNCTION__)),
				"main_content"  => strtolower(get_class()).'/wizard',
				"custom_js"     => array("forms-wizard.js")
			);
			$this->set_data->_backend_css(array(
				"libs/jquery-steps/jquery.steps.css",
				"libs/jquery-steps/steps.css"
			));
			$this->set_data->_js(array(
				"libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
				"extra-libs/sparkline/sparkline.js",
				"dist/js/waves.js",
				"dist/js/sidebarmenu.js",
				"dist/js/custom.min.js",
				"libs/jquery-steps/build/jquery.steps.min.js",
				"libs/jquery-validation/dist/jquery.validate.min.js"
			));
			$this->set_data->setData($this->data);
			$this->load->view("backend/template/page",$this->set_data->getData());
		}
	}