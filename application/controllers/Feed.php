<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('post_model');
	}

	public function index() {
		$latitude = 0;
		$longitude = 0;

		$this->post_model->get_posts($latitude, $longitude);
	}

	public function new_post() {
		$data = [
			'title' => 'Teste',
			'description' => 'Teste',
			'type' => '1',
			'status' => '1',
			'latitude' => '-25.445566',
			'longitude' => '-48.445566',
			'id_category' => '1',
			'id_user' => '1',
			'create_date' => date('Y-m-d H:i:s')
		];

		$this->post_model->new_post($data);
	}
}

/* End of file Feed.php */
/* Location: ./application/controllers/Feed.php */