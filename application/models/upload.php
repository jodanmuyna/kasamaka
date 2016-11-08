<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Model {

	function __construct() 
	{
        parent::__construct();
    }
	public function save_image()
	{
		if ( !$this->upload->do_upload('userfile'))
        {
             //$this->upload->display_errors()
             return false;
        }
        else
        {
              //echo json_encode(  array('msg' => $this->upload->data()) );
			$uid = $this->session->userdata('id');
			$upload_data = $this->upload->data();
			$filename = $upload_data['file_name'];
			$path = $upload_data['full_path'];

			$this->db->insert('images', array(
				'user_id' => $uid,
				'content' => $filename,
				'type' => "logo"
			));

			return true;
        }
	}
	public function view_file(){
		$query = $this->db->get_where('uploads', array('user_id' => $this->session->userdata('id')));
		return $query->result();
	}
	
}
