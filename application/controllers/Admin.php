<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url'); 
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('admin');
		$this->load->view('templates/footer.php');
	}

	function aksi_login()
	{
		if ($user= $this->m_admin->get_user() ){
			$_SESSION['login'] = 1;
			redirect(base_url()."admin_home");
		}else{
			$_SESSION['notif'] = 1;
			redirect(base_url().'admin');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}
}