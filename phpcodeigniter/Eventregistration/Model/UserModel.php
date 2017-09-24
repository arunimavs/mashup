<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

public function registerUser($credentials){
	if($this->db->insert('user',$credentials)){
		return true;
	}
	else { return false;}
}

public function getFull(){
	$query=$this->db->insert_id();
	return $query;	
}
 
public function getUsers($fdata){

$this->db->where('id',$fdata);
$query1=$this->db->get('user');
return $query1->result();
}

public function getMax(){
	$this->db->select_max('id');
	$query  = $this->db->get('user');
	return $query->result_array();	
}

public function getUpdate($res2,$credentials){
	$this->db->where('id',$res2);
	$this->db->update('user',$credentials);	
}

public function deleteUser($res2){
	$this->db->where('id',$res2);
	$this->db->delete('user');	
}


}


?>




