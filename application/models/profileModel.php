<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileModel extends CI_model {

	function __construct() {
        parent::__construct();

    }
	public function addProfile(){

		$query = $this->db->get_where('userinfo', array('userID' => $this->input->post('userID')));
		$data = array(
			'userID' => $this->input->post('userID'),
			'lastName' => $this->input->post('lname'),
			'firstName' => $this->input->post('fname'),
			'mi' => $this->input->post('mi'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'contactNUmber' => $this->input->post('contact'),
			);		
		if ($query->num_rows() > 0) {
			$update = $this->db->update('userinfo', $data);
			return $update;
		}else{
			$insert = $this->db->insert('userinfo', $data);
			return $insert;
		}
	}
	public function getProfile(){
		$query = $this->db->get_where('userinfo', array('userID' => $this->session->userdata('id')));
		return $query->row();
	}
	public function thisProfile(){
		$query = $this->db->get_where('userinfo', array('userID' => $this->session->userdata('id')));
		if ($query->num_rows() > 0) {
			return false;
		}else{
			return true;
		}
	}
	public function checkEmail(){
        $check = $this->db->get_where('userinfo', array('email' => $this->input->post('email')));
        if ($check->num_rows() > 0 ) {
        	return true;
        }
    }
    public function checkUser(){
        $check = $this->db->get_where('accounts', array('userName' => $this->input->post('userName')));
        if ($check->num_rows() > 0 ) {
        	return true;
        }
    }
}

