<?php 

class Models_connect extends CI_Model{

	public function __construct(){
	parent::__construct();
}


	function tampil_data(){
		return $this->db->get('connect');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

}