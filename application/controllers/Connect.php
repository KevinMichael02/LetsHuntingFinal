<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('models_connect');

	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('connect');
		$this->load->view('templates/footer.php');
	}


	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$komunitas = $this->input->post('komunitas');
		$facebook = $this->input->post('facebook');
		$contact = $this->input->post('contact');


		$data = array(
			'nama' => $nama,
			'komunitas' => $komunitas,
			'facebook' => $facebook,
			'contact' => $contact,
			);
		$this->models_connect->input_data($data,'connect');
		redirect('connect');
	}
}