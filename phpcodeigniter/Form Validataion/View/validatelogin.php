<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>.error{background-color: red;height:20px;}</style>
</head>
<body background="white">

<div style="margin-top:2%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :1px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<br><br>Username :
<br><?php echo form_error('name','<div class="error">', '</div>'); ?>
<form method="POST" action="http://localhost/project/index.php/form">
	<input type="text" name="name" style="margin:0px;padding: 10px;" ><br><br>
		Password :<br><br><?php echo form_error('password','<div class="error">', '</div>'); ?><br>
		<input type="password" name="password" style="margin:0px;padding: 10px;" ><br><br>
		Email :<?php echo form_error('email','<div class="error">', '</div>'); ?>
		<input type="email" name="email" style="margin:0px;padding: 10px;" ><br><br>
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>

	</form>
	</div>
</body>
</html>

