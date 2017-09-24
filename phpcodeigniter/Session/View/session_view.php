<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session login</title>
	<style>.error{background-color: red;height:20px;}</style>
</head>
<body background="white">

<div style="margin-top:2%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :1px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<br><br>Username :
<br>
<form method="POST" action="http://localhost/project/index.php/session">
	<input type="text" name="name" style="margin:0px;padding: 10px;" ><br><br>
		Password :<br><br><br>
		<input type="password" name="password" style="margin:0px;padding: 10px;" ><br><br>
		
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>

	</form>
	</div>
</body>
</html>
