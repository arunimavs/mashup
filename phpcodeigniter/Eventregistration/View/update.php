<	?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update account</title>
</head>
<body background="http://www.bluehorizonevents.co.uk/wp-content/uploads/bg1.jpg">
<div style="margin-top:5%;margin-left:28%;text-align:center;border-radius:5px;width:300px;border :5px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<?php 

foreach($update_data as $row)
{
	$user=$row->name;
	$id1=$row->id;	
	$email=$row->email;
	$gender=$row->gender;
	$phone=$row->phone;
}?>
<p style="font-size: 20px">Update the details</p>


<form method="POST" action="http://localhost/project/index.php/update1" style="margin:0px;padding: 10px;text-align: left;">
	   User Name :<?php echo $user;?><br>
		<input type="text" name="name" style="margin:0px;padding: 10px;"><br><br>
		Email : <?php echo $email;?><br>
		<input type="text" name="email" style="margin:0px;padding: 10px;"><br><br>
		Phone no :<?php echo $phone;?><br>
		<input type="text" name="phone" style="margin:0px;padding: 10px;"><br><br>
		 Gender : <?php echo $gender;?><br><br>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br><br><br>
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>
</form>
</div>
</body>
</html>