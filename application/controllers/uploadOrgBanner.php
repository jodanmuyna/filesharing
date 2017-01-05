<?php

class UploadOrgBanner extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
        public function file_view(){
			$this->load->view('file_view', array('error' => ' ' ));
		}

        public function do_upload(){
			$config = array(
			'upload_path' => "./uploads/org/",
			'allowed_types' => "jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "5000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "0",
			'max_width' => "0",
			'encrypt_name' => TRUE,
				);
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
				{
				$data = array('upload_data' => $this->upload->data());
				$file = $this->upload->data();
				$data = array( 
					'file' =>  $file['file_name'],
					'org_id' => $this->session->userdata('orgID'),
					);
				$logo = $this->db->get_where('org_banner', array('org_id' => $this->session->userdata('orgID')));
				if ($logo->num_rows() > 0) {
					$this->db->where('org_id', $this->session->userdata('orgID'));
					$this->db->update('org_banner',$data);
				}else{
					$this->db->insert('org_banner',$data);
				}
				
				redirect('Dashboard/orgPage');
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				redirect('Dashboard/homeContent');
				}
		}
}
