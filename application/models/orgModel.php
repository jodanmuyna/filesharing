<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrgModel extends CI_model {

	var $table = 'organization';
	var $column = array('id','name','slug');
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

	// _________________________________________
	public function getOrg(){

		$query = $this->db->get('organization');
		return $query->result();
	}
	public function addAbout(){
		$data = array(
			'about' => $this->input->post('content'),
			'org_id' => $this->input->post('orgId'),
			);
		$check = $this->db->get_where('org_about', array('org_id' => $this->input->post('orgID')));
		if ($check->num_rows() > 0) {
			$this->db->where('org_id', $this->input->post('orgID'));
			$query = $this->db->update('org_about', $data);
		}else{
			$query = $this->db->insert('org_about', $data);
		}
		return $query;
	}
	public function getOrgAbout(){
		$query = $this->db->get_where('org_about', array('org_id' => $this->session->userdata('orgID')));
		return $query->row();
	}
	public function getOrgBanner(){
		$query = $this->db->get_where('org_banner', array('org_id' => $this->session->userdata('orgID')));
		return $query->row();
	}
}
