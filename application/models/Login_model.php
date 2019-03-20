<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/12/2019
	 * Time: 3:18 PM
	 * @access public
	 * @subpackage    Model
	 * @category    Login_model
	 * Class Login_model
	 * @property  Login_model $login_model
	 */

	class Login_model extends MY_Model
	{
		/*protected $table    = 'admin_users';*/
		/*protected $table    = 'users';*/

		public function _auth($email,$password)
		{
			$return = array('error' => FALSE);
			$this->db->where('email',$email);
			$result = $this->db->get($this->getTable());
			if($result->num_rows() == 1){
				$result = $result->row();
				$hash   = $result->password;
				if(password_verify($password,$hash)){
					$data   = array(
						"last_login"    => now()
					);
					$this->db->where('email',$email);
					$this->db->update($this->getTable(), $data);
					$return['user'] = $result;
					return $return;
				} else {
					$return = array(
						'error' => TRUE,
						'msg'   => 'Parola introdusa nu este corecta!'
					);
					return $return;
				}
			}else{
				$return = array(
					'error' => TRUE,
					'msg'   => 'Nu exista niciun cont asociat aceastei adrese de email!'
				);
				return $return;
			}
		}

	}