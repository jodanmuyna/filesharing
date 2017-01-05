<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_model {

	function __construct() {
        parent::__construct();

    }
	public function check_credentials(){

		$query = $this->db->get_where('accounts', array('userName' => $this->input->post('userName'), 'password' => md5($this->input->post('password'))));
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata(array(
			 	 'id' => $row->id,
				 'userName' => $row->userName,
				 'role'	=> $row->role,
				 'orgID' => $row->orgID,
				 'is_logged_in' => true,
		 	 ));
			return true;
		}
	}
}

