<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function register(){
		if($this->input->post()){

			$name=$this->input->post('name');
			$pass=$this->input->post('password');
			$gender=$this->input->post('gender');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			if(!empty($name)&&!empty($pass)&&!empty($gender)&&!empty($phone)&&!empty($email)){
					$credentials=array("name"=>$name,"pass"=>$pass,"gender"=>$gender,"phone"=>$phone,"email"=>$email);
					$this->load->model('UserModel');
					if($this->UserModel->registerUser($credentials)){
						$fdata=$this->UserModel->getFull();
						$data['read']=$this->UserModel->getUsers($fdata);
						$this->load->view('select',$data);
					}else{ echo " failed";
							}
				
			} 
			else { echo "Enter all the details"; }
		}

		else{ $this->load->view('register');}
	}

							  
 public function select(){
 	if($this->input->post()){
			$this->load->view('select');
				}
		else{ echo "</br></br>Cannot be displayed";
	}

 }

 public function update(){
 	if($this->input->post()){
 				$this->load->model('UserModel');
 				$fdata1=$this->UserModel->getMax();
 				$res2= $fdata1[0]['id'];
				$data1['update_data']=$this->UserModel->getUsers($res2);
				$this->load->view('update',$data1);
				}
	else { echo " </br></br>Cannot be displayed";}

 }

 public function update1(){
 	if($this->input->post()){
 			$name=$this->input->post('name');
			$gender=$this->input->post('gender');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$this->load->model('UserModel');
 				$fdata1=$this->UserModel->getMax();
 				$res2= $fdata1[0]['id'];
				$data1=$this->UserModel->getUsers($res2);
			    foreach($data1 as $row)
			    {
			    	$names=$row->name;
			    	$genders=$row->gender;
			    	$phones=$row->phone;
			    	$emails=$row->email;
			    }

			if(!empty($name)){
							  $name1=$name;}
			else{ 			  $name1=$names;  
			}

			if(!empty($email)){
							  	$email1=$email;}
			else{ 				$email1=$emails;  
			}

			if(!empty($gender)){
							  	$gender1=$gender;}
			else{ 				$gender1=$genders;  
			}

			if(!empty($phone)){
							  	$phone1=$phone;}
			else{ 				$phone1=$phones;  
			}
			$credentials=array("name"=>$name1,"gender"=>$gender1,"phone"=>$phone1,"email"=>$email1);
				$this->load->model('UserModel');
 				$fdata1=$this->UserModel->getMax();
 				$res2= $fdata1[0]['id'];
				$this->UserModel->getUpdate($res2,$credentials);
				$this->load->model('UserModel');
 				$fdata1=$this->UserModel->getMax();
 				$res2= $fdata1[0]['id'];
				$data5['update_display']=$this->UserModel->getUsers($res2);
				$this->load->view('update1',$data5);
 				
	}
	else { echo " </br></br>Cannot be displayed";}

 }

public function delete(){
 	if($this->input->post()){
 				$this->load->model('UserModel');
 				$fdata1=$this->UserModel->getMax();
 				$res2= $fdata1[0]['id'];
				$this->UserModel->deleteUser($res2);
				$this->load->model('UserModel');
 				$fdata3=$this->UserModel->getMax();
 				$res3= $fdata3[0]['id'];
				$data6['delete_display']=$this->UserModel->getUsers($res3);
				$this->load->view('delete',$data6);
				}
	else { echo " </br></br>Cannot be displayed";}

 }
}

?>