<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {
		
	}

	public function new_user() {
		$data = [
			'role' => '1',
			'name' => 'João',
			'email' => 'joao@outlook.com',
			'facebook' => '',
			'google' => '',
			'twitter' => '',
			'password' => md5('banana'),
			'phone' => '4188888888',
			'create_date' => date('Y-m-d H:i:s'),
		];

		$this->user_model->insert_user($data);
	}

	public function login() {
		$email = 'joao@outlook.com';
		$password = 'banana';

		$retorno = $this->user_model->login($email,$password);

		var_dump($retorno);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */ ?>