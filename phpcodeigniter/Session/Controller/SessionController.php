<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionController extends CI_Controller 
{
public function sessionlogin()
{
	
	$set_data=$this->session->userdata('name');

	if(!empty($set_data)){
		$this->load->model('SessionModel');
		$fdata['read']=$this->SessionModel->CheckUser($set_data);
		$this->load->view('session_home',$fdata);
	} else{
		if($this->input->post()){
			$name=$this->input->post('name');
			$pass=$this->input->post('password');

			$credentials=array(
				'name'=>$name,
				
			);

			$this->load->model('SessionModel');
			$fdata=$this->SessionModel->CheckUser($name);
			$fdata1['read']=$fdata;
			foreach($fdata as $row){
				$name1=$row->name;
				$pass1=$row->password;
			}
			if($name1==$name&&$pass1==$pass){
				
				$this->session->set_userdata($credentials);
				$this->load->view('session_home',$fdata1);
			} else {
				echo "invalid login";}
		} else{
			$this->load->view('session_view');
		}
	}
}


public function sessionhome(){

	if($this->input->post()){
	$this->session->unset_userdata('name');
	redirect('session');
	}else{ echo "cannot be displayed";}
}


}

?>