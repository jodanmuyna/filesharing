<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	function __construct(){
        parent::__construct();
    }
    
	public function getLogo(){
		$query = $this->db->get_where('homeimage', array('type' => 'logo'));
		return $query->row();

	}	
	public function getBanner(){
		$query = $this->db->get_where('homeimage', array('type' => 'banner'));
		return $query->row();

	}	
	public function addAbout(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'type' => 'about',
			);
		$check = $this->db->get_where('homecontent', array('type' => 'about'));
		if ($check->num_rows() > 0) {
			$this->db->where('type', 'about');
			$query = $this->db->update('homecontent', $data);
		}else{
			$query = $this->db->insert('homecontent', $data);
		}
		return $query;

	}	
	public function addBannerCaption(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'type' => 'caption',
			);
		$check = $this->db->get_where('homecontent', array('type' => 'caption'));
		if ($check->num_rows() > 0) {
			$this->db->where('type', 'caption');
			$query = $this->db->update('homecontent', $data);
		}else{
			$query = $this->db->insert('homecontent', $data);
		}
		return $query;

	}
	public function getAbout(){
		$query = $this->db->get_where('homecontent', array('type' => 'about'));
		return $query->row();
	}
	public function getCaption(){
		$query = $this->db->get_where('homecontent', array('type' => 'caption'));
		return $query->row();
	}
	public function addfooter(){
		$data = array(
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'fax' => $this->input->post('fax'),
			'address' => $this->input->post('address'),
			'type' => 'footer',
			);
		$check = $this->db->get_where('footer', array('type' => 'footer'));
		if ($check->num_rows() > 0) {
			$this->db->where('type', 'footer');
			$query = $this->db->update('footer', $data);
		}else{
			$query = $this->db->insert('footer', $data);
		}
		return $query;

	}
	public function getFooter(){
		$query = $this->db->get_where('footer', array('type' => 'footer'));
		return $query->row();
	}
}
