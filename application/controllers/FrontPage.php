<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontPage extends CI_Controller {

	function __construct() {
        parent::__construct();

    }
    public function index(){
    	$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/home',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage(),
				'childPage' => $this->pageModel->getChild()
			);
		$this->load->view('FrontPage/template', $data);
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
				'thisPage' => $this->pageModel->getAllPage($slug)
			);
		$this->load->view('FrontPage/template', $data);
	}
	public function setProfile(){
		$data = array(
				'header' => 'FrontPage/header',
				'content' => 'FrontPage/setProfile',
				'footer' => 'FrontPage/footer',
				'page' => $this->pageModel->getAllPage()
			);
		$this->load->view('FrontPage/template', $data);
	}
}