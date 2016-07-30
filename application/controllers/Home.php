<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$this->load->view('header/header');
		$this->load->view('home');
		$this->load->view('footer/footer');
	}

	public function login() {
		$this->load->view('header/header');
		$this->load->view('login/login');
		$this->load->view('footer/footer');
	}

	public function auth() {
		var_dump($this->input->post());
		echo 'entrou no auth';
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */