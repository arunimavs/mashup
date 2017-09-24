<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body background="http://www.bluehorizonevents.co.uk/wp-content/uploads/bg1.jpg">
<div style="margin-top:2%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :1px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<p style="text-align: center;font-size: 20px;"><br><b>Sign up</b></p>
<form method="POST" action="http://localhost/project/index.php/register" style="margin:0px;padding: 10px;">
	   User Name :<br>
		<input type="text" name="name" style="margin:0px;padding: 10px;"><br><br>
		Password :<br>
		<input type="password" name="password" style="margin:0px;padding: 10px;"><br><br>
		Email :<br>
		<input type="text" name="email" style="margin:0px;padding: 10px;"><br><br>
		Phone no :<br>
		<input type="text" name="phone" style="margin:0px;padding: 10px;"><br><br>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br><br><br>
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>
</form>
</div>
</body>
</html>