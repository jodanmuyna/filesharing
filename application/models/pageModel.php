<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageModel extends CI_Model {

	var $table = 'page';
	var $column = array('id','title','content');
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

	// =-----------------

	public function addThisPage(){
		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'content' => $this->input->post('content'),
			'parent_id' => $this->input->post('parent'),
			);
		$query = $this->db->insert('page', $data);
		return $query;
	}
	public function updateThisPage(){
		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'content' => $this->input->post('content'),
			'parent_id' => $this->input->post('parent'),
			);
		$this->db->where('id', $this->input->post('id'));
		$query = $this->db->update('page', $data);
		return $query;
	}
	public function getPage($id){
		$query = $this->db->get_where('page', array('id' => $id));
		return $query->row();
	}
	public function getAllPage($slug = FALSE){
		if ($slug === FALSE) {
			$query = $this->db->get('page');
			return $query->result();
		}
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('page', array('slug' => $slug));       
		return $query->row();
	}
	public function getChild(){
		$query = $this->db->get_where('page', array('parent_id >' => 0));
		return $query->result();
	}
	public function getParent(){
		$query = $this->db->get_where('page', array('parent_id' => 0));
		return $query->result();
	}
	public function getOrgBanner($id){
		$query = $this->db->get_where('org_banner', array('org_id' => $id));
		return $query->row();
	}
	public function getOrgAbout($id){
		$query = $this->db->get_where('org_about', array('org_id' => $id));
		return $query->row();
	}
	public function getOrg($id){
		$query = $this->db->get_where('organization', array('id' => $id));
		return $query->row();
	}


}
