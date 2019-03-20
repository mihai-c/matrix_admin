<?php
	/**
	 * Created by PhpStorm.
	 * User: mihai
	 * Date: 3/20/2019
	 * Time: 11:41 AM
	 */

	class Migration_Add_admin extends CI_Migration
	{
		public function up()
		{
			if(!$this->db->table_exists('admin_users')) {
				$this->dbforge->add_field(array(
					'id' => array(
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
					),
					'name' => array(
						'type' => 'VARCHAR',
						'constraint' => '150',
						'null' => TRUE
					),
					'email' => array(
						'type' => 'VARCHAR',
						'constraint' => '150',
						'unique' => TRUE,
						'null' => FALSE,
					),
					'password' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
					),
					'remember_token' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
						'null' => TRUE
					),
					'user_type' => array(
						'type' => 'ENUM("SA","A")',
						'default' => 'A',
						'null' => FALSE
					),
					'created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP',
					'updated_at' => array(
						'type' => 'VARCHAR',
						'constraint' => '20',
						'null' => TRUE
					),
					'last_login' => array(
						'type' => 'VARCHAR',
						'constraint' => '20',
						'null' => TRUE
					)
				));
				$this->dbforge->add_key('id', TRUE);
				$this->dbforge->create_table('admin_users');

				$data = array(
					'name' => 'Mihai C',
					'email' => 'test@test.com',
					'password' => '$2y$10$gwgJDgy9X33PBmZkYd.8r.3.BPXLsuC.h9yTOuNUhuzRMjhpQCpRW', //admin1234
					'user_type' => 'SA'
				);
				$this->db->insert('admin_users', $data);
			}
		}

		public function down()
		{
			$this->dbforge->drop_table('admin_users');
		}
	}