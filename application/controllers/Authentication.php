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
			if ($this->session->userdata('role') == 'staff') {
				$this->session->set_flashdata('success', 'Login Success!');
				redirect('FrontPage/orgPage/'.$this->session->userdata('orgID'));
			}
			$this->session->set_flashdata('success', 'Login Success!');
			redirect('DashBoard');
		}
		else{
			$this->session->set_flashdata('error', 'Invalid username/password!');
			redirect('');
		}
	}
}

