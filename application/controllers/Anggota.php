<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url'); 
	}

	public function index()
	{
		$data['pendaftaran'] = $this->m_data->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('anggota',$data);
		$this->load->view('templates/footer.php');
	}
}