<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountModel extends CI_Model {

	var $table = 'accounts';
	var $column = array('id','userNmae','password','orgID','role');
	var $order = array('id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
				$this->db->where('userName !=', $this->session->userdata('userName'));
				if ($this->session->userdata('role') == 'admin') {
					$this->db->where('orgID', $this->session->userdata('orgID'));
					$this->db->where('role !=', 'admin');
				}
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return;
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	// save account
	public function saveAccount(){
		$data = array(
			'userName' => $this->input->post('userName'),
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role'),
			'orgID' => $this->input->post('orgID'),
			);		
		
			$insert = $this->db->insert('accounts', $data);
			$query = $this->db->get_where('accounts', array('userName' => $this->input->post('userName')));

			if ($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata(array(
				 	 'save' => $row->id,
			 	 ));
			}	
			return $insert;
	}
	public function saveUserinfo(){
		$data = array(
			'userID' => $this->session->userdata('save'),
			'lastName' => $this->input->post('lname'),
			'firstName' => $this->input->post('fname'),
			'mi' => $this->input->post('mi'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'contactNUmber' => $this->input->post('contact'),
			);		
	
			$insert = $this->db->insert('userinfo', $data);
			return $insert;
	}
	public function saveInfo(){
		$data = array(
			'userID' => $this->session->userdata('id'),
			'lastName' => $this->input->post('lname'),
			'firstName' => $this->input->post('fname'),
			'mi' => $this->input->post('mi'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'contactNUmber' => $this->input->post('contact'),
			);		
	
			$insert = $this->db->insert('userinfo', $data);
			return $insert;
	}

}
