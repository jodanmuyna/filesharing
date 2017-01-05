<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('accountModel','accounts');
	}

	public function ajax_list()
	{
		$list = $this->accounts->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $accounts) {
			$no++;
			$row = array();
			// $row[] = $accounts->id;
			$row[] = $accounts->userName;
			$row[] = $accounts->orgID;
			$row[] = $accounts->role;
			//add html for action <a class="btn btn-sm btn-primary crud" href="javascript:void()" title="Edit" onclick="edit_accounts('."'".$accounts->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
			$row[] = '
				  <a class="btn btn-sm btn-danger crud" href="javascript:void()" title="Hapus" onclick="delete_accounts('."'".$accounts->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->accounts->count_all(),
						"recordsFiltered" => $this->accounts->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->accounts->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'id' => $this->input->post('id'),
				'userName' => $this->input->post('userName'),
				'password' => md5('1234'),
				'role' => $this->input->post('role'),
				'orgID' => $this->input->post('orgID'),
				
			);
		$insert = $this->accounts->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'id' => $this->input->post('id'),
				'userName' => $this->input->post('userName'),
				// 'password' => md5($this->input->post('password')),
				'role' => $this->input->post('role'),
				'orgID' => $this->input->post('orgID'),
			);
		$this->accounts->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->session->set_userdata('delaccounts',$id);
		$this->accounts->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
}

