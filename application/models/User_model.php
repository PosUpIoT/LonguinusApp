<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_users() {
		$query = $this->db->query('SELECT * FROM users');
		$users = $query->result_array();
		return $users;
	}	

	public function insert_user($data) {
		$this->db->insert('users', $data);
	}

	public function login($email, $password) {
		$data = array('email' => $email, 'password' => md5($password));
		$query = $this->db->get_where('users', $data);

		if($query->num_rows() > 0){
			return TRUE;
		}

		return FALSE;
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */