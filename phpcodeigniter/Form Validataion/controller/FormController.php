<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

public function formlogin(){
		if($this->input->post()){
			$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');

$this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|max_length[12]');
if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('validatelogin');
                }
                else
                {
                        echo "success";
                }

		}
			else{ $this->load->view('validatelogin');}
	}
}

?>
