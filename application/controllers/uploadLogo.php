<?php

class UploadLogo extends CI_Controller {

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
				{i
				$error = array('error' => $this->upload->display_errors());
				
				}
		}
}
