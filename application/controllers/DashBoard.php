<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->is_logged_in();

    }
    function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true || $this->session->userdata('role') == 'staff'){
            redirect('');
            die();
        }
    }
    public function index(){
    	$data = array(
				'header' => 'DashBoard/header',
				'content' => 'DashBoard/index',
			);
		$this->load->view('DashBoard/template', $data);
    }
    public function accountList(){
    	$data = array(
				'header' => 'DashBoard/header',
				'content' => 'DashBoard/accountList',
                'organization' => $this->orgModel->getOrg()
			);
		$this->load->view('DashBoard/template', $data);
    }
    public function addAccount(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/addAccount',
                'organization' => $this->orgModel->getOrg()
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function saveAccount(){
        $check = $this->profileModel->checkEmail();
        $user = $this->profileModel->checkUser();
        if ($user) {
            $this->session->set_flashdata('error', 'Username not available!');
            $this->addAccount();
        }else{
            if ($check) {
                $this->session->set_flashdata('error', 'Email Already use!');
                $this->addAccount();
            }else{
                $set = $this->accountModel->saveAccount();
                if ($set) {
                    $this->accountModel->saveUserinfo();
                    $this->session->set_flashdata('success', 'Account Save!');
                    redirect('DashBoard/addAccount');
                }else{
                    $this->session->set_flashdata('error', 'Somethings Error!');
                    $this->addAccount();
                }

            } 
        }
    }
    public function profile(){
    	$data = array(
				'header' => 'DashBoard/header',
				'content' => 'DashBoard/profile',
				'userInfo' => $this->profileModel->getProfile()
			);
		$this->load->view('DashBoard/template', $data);
    }
    public function myprofile(){
    	$check = $this->profileModel->addProfile();
    	if($check){
            $this->session->set_flashdata('success', 'Profile Updated!');
    		redirect('DashBoard/profile');
    	}else{
    		redirect('DashBoard/profile');
    	}
    }
    public function page(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/page',
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function addPage(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/addPage',
                'parent' => $this->pageModel->getParent(),
                
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function addNewPage(){
        $check = $this->pageModel->addThisPage();
        if ($check) {
            $this->session->set_flashdata('success', 'Page Save!');
           redirect('DashBoard/page');
        }
    }
    public function updatePage($id){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/updatePage',
                'page' => $this->pageModel->getPage($id),
                'parent' => $this->pageModel->getParent(),
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function updateSavePage(){
        $check = $this->pageModel->updateThisPage();
        if ($check) {
            $this->session->set_flashdata('success', 'Page Updated!');
           redirect('DashBoard/updatePage/'.$this->input->post('id'));
        }
    }
    public function HomeContent(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/homeContent',
                'logo' => $this->homeModel->getLogo(),
                'banner' => $this->homeModel->getBanner(),
                'getAbout' => $this->homeModel->getAbout(),
                'getCaption' => $this->homeModel->getCaption(),
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function setAbout(){
        $save = $this->homeModel->addAbout();
        if ($save) {
            $this->session->set_flashdata('success', 'Data Save!');
            redirect('DashBoard/homeContent');
        }else{
            $this->session->set_flashdata('error', 'Error Occur!');
            redirect('DashBoard/homeContent');
        }
    }
    public function setCaption(){
        $save = $this->homeModel->addBannerCaption();
        if ($save) {
            $this->session->set_flashdata('success', 'Data Save!');
            redirect('DashBoard/homeContent');
        }else{
            $this->session->set_flashdata('error', 'Error Occur!');
            redirect('DashBoard/homeContent');
        }
    }
    public function organization(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/organization',
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function orgPage(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/orgPage',
                'orgAbout' => $this->orgModel->getOrgAbout(),
                'orgBanner' => $this->orgModel->getOrgBanner(),
            );
        $this->load->view('DashBoard/template', $data);
    } 	   
    public function orgAbout(){
        $save = $this->orgModel->addAbout();
        if ($save) {
            $this->session->set_flashdata('success', 'Data Save!');
            redirect('DashBoard/orgPage');
        }else{
            $this->session->set_flashdata('error', 'Error Occur!');
            redirect('DashBoard/orgPage');
        }
    }
}