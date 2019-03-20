<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/6/2019
	 * Time: 3:02 PM
	 * @access public
	 * @subpackage    Model
	 * @category    MY_Model
	 * Class MY_Model
	 * @property  MY_Model $my_model
	 */


	class MY_Model extends CI_Model
	{
		/**
		 * @var $table
		 */
		protected $table    = NULL;

		/**
		 * @var $where
		 */
		protected $where    = NULL;

		/**
		 * @var $order
		 */
		protected $order    = NULL;

		/**
		 * @var $order
		 */
		protected $limit    = NULL;

		/**
		 * @var $result
		 */
		protected $result   = NULL;


		function __construct()
		{
			parent::__construct();
			$this->_setTable();
		}

		/**
		 * @return string
		 */
		public function getTable(){
			return $this->table;
		}

		/**
		 * @param string $name table name
		 * @return MY_Model
		 */
		public function _setTable($name = NULL)
		{
			if(!is_null($name)){
				$this->table    = $name;
				return $this;
			}elseif(is_null($this->table)){
				$table_name     = strtolower(get_class($this));
				$this->table    = substr($table_name, 0, strpos($table_name, '_model'));
				return $this;
			}
		}

		/**
		 * @param array $where whereclause
		 * @return MY_Model
		 */
		public function _getWhere( array $where = NULL)
		{
			if (!is_null($where)) {
				$this->where    = $where;
			}
			return $this;
		}

		/**
		 * @param string $order_by clause
		 * @return MY_Model
		 */
		public function _orderBy( $order_by = NULL)
		{
			if (!is_null($order_by)) {
				$this->order    = $order_by;
			}
			return $this;
		}

		/**
		 * @param int $limit limit clause
		 * @param int $offset offset clause
		 * @return MY_Model
		 */
		public function _limit($limit = NULL, $offset = NULL)
		{
			if (!is_null($limit)) {
				$limit    = array('limit'=>$limit);
			}else{
				$limit    = array('limit'=>NULL);
			}

			if (!is_null($offset)) {
				$offset    = array('offset'=>$offset);
			}else{
				$offset    = array('offset'=>NULL);
			}

			$this->limit = array_merge($limit,$offset);
			return $this;
		}

		/**
		 * @return object
		 */
		public function _getResults(){
			if(!is_null($this->where)){
				$this->db->where($this->where);
			}
			if(!is_null($this->order)){
				$this->db->order_by($this->order);
			}
			if(!is_null($this->limit)) {
				$this->db->limit($this->limit['limit'],$this->limit['offset']);
			}
			if(is_null($this->result)){
				$this->result = $this->db->get($this->table);
			}
			return $this->result;
		}


		/**
		 * @param array $data
		 * @return int
		 */
		public function _insert(array $data)
		{
			$this->db->insert($this->table, $data);
			$return_id = $this->db->insert_id();
			return $return_id;
		}


		/**
		 * @param array $where
		 * @param array $data
		 * @return bool
		 */
		public function _update(array $where, array $data)
		{
			$this->db->where($where);
			if ($this->db->update($this->table, $data))
				return TRUE;
			else
				return FALSE;
		}


		/**
		 * @param array $where
		 * @return bool
		 */
		public function _delete(array $where)
		{
			$this->db->where($where);
			if ($this->db->delete($this->table))
				return TRUE;
			else
				return FALSE;
		}


		/**
		 * @param array $where
		 * @return int
		 */
		public function count_where(array $where)
		{
			$this->db->where($where);
			$query = $this->db->get($this->table);
			return $query->num_rows();;
		}

		/**
		 * @return int
		 */
		public function count_all()
		{
			$query = $this->db->get($this->table);
			return $query->num_rows();
		}

		/**
		 * @param string $field
		 * @return object
		 */
		public	function get_max($field = NULL)
		{
			$field_get = !is_null($field) ? $field : 'id';
			$this->db->select_max($field_get);
			$query = $this->db->get($this->table);
			return $query;
		}

		/**
		 * @param string $mysql_query
		 * @return object
		 */
		public function _custom_query($mysql_query)
		{
			$query = $this->db->query($mysql_query);
			return $query;
		}

		/**
		 * @param MY_Model $my_model
		 */
		public function setMyModel($my_model)
		{
			$this->my_model = $my_model;
		}
	}