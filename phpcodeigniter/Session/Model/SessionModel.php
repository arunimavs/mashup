<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionModel extends CI_Model{

public function CheckUser($name){
	$this->db->where('name',$name);
$query1=$this->db->get('session_user');
return $query1->result();
}
}
?>