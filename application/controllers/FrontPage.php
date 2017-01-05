<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontPage extends CI_Controller {

	function __construct() {
        parent::__construct();

    }
    public function index(){
    	$check = $this->db->get_where('accounts', array('role' => 'systemadmin'));
    	if ($check->num_rows() == 0) {
    		redirect('FrontPage/adminReg');
    	}
    	$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/home',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
                'banner' => $this->homeModel->getBanner(),
                'about' => $this->homeModel->getAbout(),
                'caption' => $this->homeModel->getCaption(),
			);
		$this->load->view('FrontPage/template', $data);
    }
    public function adminReg(){
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/adminReg',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
			);
		$this->load->view('FrontPage/template', $data);
	}
	public function setAccount(){
        $set = $this->accountModel->saveAccount();
        if ($set) {
            redirect('');
        }else{
            redirect('FrontPage/adminReg');
        }
    }
    function page($slug = NULL)
	{
		$sdata['page'] = $this->pageModel->getAllPage($slug);

		    if (empty($sdata['page']))
		    {
		        show_404();
		    }
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/page',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'thisPage' => $this->pageModel->getAllPage($slug),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
			);
		$this->load->view('FrontPage/template', $data);
	}
	public function setProfile(){
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/setProfile',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
			);
		$this->load->view('FrontPage/template', $data);
	}
	public function myAccount(){
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/myAccount',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
				'userInfo' => $this->profileModel->getProfile()
			);
		$this->load->view('FrontPage/template', $data);
	}
	public function myprofile(){
    	$check = $this->profileModel->addProfile();
    	if($check){
    		$this->session->set_flashdata('success', 'Profile Updated!');
    		redirect('FrontPage/myAccount');
    	}else{
    		redirect('FrontPage/myAccount');
    	}
    }
    public function orgPage($id){
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/orgPage',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild(),
				'logo' => $this->homeModel->getLogo(),
				'userInfo' => $this->profileModel->getProfile(),
				'banner' => $this->pageModel->getOrgBanner($id),
				'about' => $this->pageModel->getOrgabout($id),
				'org' => $this->pageModel->getOrg($id),
			);
		$this->load->view('FrontPage/template', $data);
	}
}