<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url'); 
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['pendaftaran'] = $this->m_data->tampil_info()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$this->load->view('admin_home',$data);
		$this->load->view('templates/footer.php');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_anggota($where,'pendaftaran');
		redirect('admin_home');
	}
}