<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/11/2019
	 * Time: 6:17 PM
	 * @access public
	 * @subpackage    Library
	 * @category    Set_data
	 * Class Set_data
	 * @property  Set_data $set_data
	 */

	class Set_data
	{
		protected $data     = array(
				'header'    => TRUE
			);


		public function __construct()
		{
		}

		/**
		 * @param array $data
		 * @return $this
		 */
		public function setData(array $data = NULL)
		{
			if(!is_null($data))
			{
				foreach($data as $key => $value){
					$this->data[$key]   = $value;
				}
			}
			return $this;
		}

		/**
		 * Load css fontend/backend
		 * @param array $css Css array files
		 * @return array $css_file Css file
		 */
		public function _frontend_css(array $css = []){
			$css_file[0]	= 'libs/bootstrap/dist/css/bootstrap.min.css';
			$css_file[1]	= 'libs/fontawesome/css/all.min.css';
			$css_file[2]	= 'dist/backend/css/style.min.css';

			foreach($css as $val){
				if(!in_array($val,$css_file)){
					$css_file[]	= $val;
				}
			}

			//return all css
			return $css_file;
		}

		/**
		 * Load css fontend/backend
		 * @param array $css Css array files
		 * @return array $css_file Css file
		 */
		public function _backend_css(array $css = []){
			$css_file[0]	= 'libs/bootstrap/css/bootstrap.min.css';
			$css_file[1]	= 'libs/fontawesome/css/all.min.css';
			$css_file[2]	= 'dist/css/style.min.css';

			foreach($css as $val){
				if(!in_array($val,$css_file)){
					$css_file[]	= $val;
				}
			}
			$this->data['css']  = $css_file;

			//return all css
			return $this;
		}

		/**
		 * Load js fontend/backend
		 * @param array $js Js array files
		 * @return array $js_file Js files
		 */
		public function _js(array $js = []){
			$js_file[0]	= 'libs/jquery/dist/jquery.min.js';
			$js_file[1]	= 'libs/popper.js/dist/umd/popper.min.js';
			$js_file[2]	= 'libs/bootstrap/js/bootstrap.min.js';
			$js_file[3]	= 'libs/fontawesome/js/all.min.js';

			foreach($js as $val){
				if(!in_array($val,$js_file)){
					$js_file[]	= $val;
				}
			}

			$this->data['js']  = $js_file;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getData()
		{
			return $this->data;
		}
	}