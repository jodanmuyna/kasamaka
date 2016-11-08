<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	function __construct() {
        parent::__construct();

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
			);
		$this->load->view('DashBoard/template', $data);
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
                'parent' => $this->pageModel->getParent()
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function staticPage(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/staticPage',
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function HomeContent(){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/homeContent',
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function addNewPage(){
        $check = $this->pageModel->addThisPage();
        if ($check) {
           redirect('DashBoard/page');
        }
    }
    public function updatePage($id){
        $data = array(
                'header' => 'DashBoard/header',
                'content' => 'DashBoard/updatePage',
                'page' => $this->pageModel->getPage($id),
                'parent' => $this->pageModel->getParent()
            );
        $this->load->view('DashBoard/template', $data);
    }
    public function updateSavePage(){
        $check = $this->pageModel->updateThisPage();
        if ($check) {
           redirect('DashBoard/updatePage/'.$this->input->post('id'));
        }
    }
    public function do_upload(){
            $config = array(
            'upload_path' => "./upload/",
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
                    'content' =>  $file['file_name'],
                    );
                $this->db->where('id',1);
                $this->db->update('image',$data);
                redirect('Dashboard');
                }
                else
                {
                $error = array('error' => $this->upload->display_errors());
                redirect('Dashboard/homeContent');
                }
        }
 	   
}