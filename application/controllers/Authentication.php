<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	function __construct() {
        parent::__construct();

    }
    public function logout(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
	public function login(){
		$check = $this->authenticate->check_credentials();
		$addProfile = $this->profileModel->thisProfile();
		if ($check) {
			if ($addProfile) {
				redirect('FrontPage/setProfile');
			}
			redirect('DashBoard');
		}
		else{
			echo "error";
		}
	}
}

