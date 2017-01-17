<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Akun_model');
	}

	public function pendaftaran(){
		$this->Akun_model->insert_user(); //
		redirect('anggota');
	}



	public function login(){

		if ($user= $this->Akun_model->get_user() )
		{
			redirect('home');
		}
		else {
		redirect('index.php');	
		}
}


}
