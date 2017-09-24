<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session home</title>
	<style>.error{background-color: red;height:20px;}</style>
</head>
<body background="white">
 <?php 

 if(!empty($read)){
 	foreach($read as $row)
{
	$user=$row->name;
	$id=$row->id;
}
}?>
<div style="margin-top:2%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :1px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<br><br>Id : <?php echo $id;?> 
<br>
<br><br>Username : <?php echo $user;?>
<br>
<p>Login successful</p>
<form method="POST" action="http://localhost/project/index.php/sessionhome" style="margin:0px;padding: 10px;">
<input type="submit" name="Enter" value="Logout" style="margin:0px;padding: 10px;"><br><br>
</form>
<body>
</html>
