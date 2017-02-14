<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('saran');
		$this->load->view('templates/footer.php');
	}

	public function saran(){
//		var_dump($this->input->post('namalengkap'));
		$this->m_data->insert_user_saran();
		redirect(base_url().'saran');
	}

}