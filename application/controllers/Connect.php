<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('connect');
		$this->load->view('templates/footer.php');
	}


	public function connect(){
//		var_dump($this->input->post('namalengkap'));
		$this->m_data->insert_user_connect();
		redirect(base_url().'connect');
	}
}