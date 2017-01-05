<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('orgModel','organization');
	}

	public function ajax_list()
	{
		$list = $this->organization->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $organization) {
			$no++;
			$row = array();
			// $row[] = $organization->id;
			$row[] = $organization->name;
			$row[] = $organization->slug;
			//add html for action <a class="btn btn-sm btn-primary crud" href="javascript:void()" title="Edit" onclick="edit_organization('."'".$organization->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
			$row[] = '<a class="btn btn-sm btn-primary crud" href="javascript:void()" title="Edit" onclick="edit_organization('."'".$organization->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger crud" href="javascript:void()" title="Hapus" onclick="delete_organization('."'".$organization->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->organization->count_all(),
						"recordsFiltered" => $this->organization->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->organization->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		$data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'slug' => $slug,
				
			);
		$insert = $this->organization->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		$data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'slug' => $slug,
				
			);
		$this->organization->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->session->set_userdata('delorganization',$id);
		$this->organization->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
}

