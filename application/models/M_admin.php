<?php

class M_admin extends CI_Model{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function get_user(){
	$query =  $this->db->get_where('admin', array (
												'user'=>$this->input->post('user'),
												'pass'=>MD5($this->input->post('pass'))
												
												));

	return $query->result_array();
	}	
}