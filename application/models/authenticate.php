<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_model {

	function __construct() {
        parent::__construct();

    }
	public function check_credentials(){

		$query = $this->db->get_where('accounts', array('email' => $this->input->post('email'), 'password' => md5($this->input->post('password'))));
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata(array(
			 	 'id' => $row->id,
				 'email' => $row->email,
				 'role'	=> $row->role,
		 	 ));
			return true;
		}
	}
}

