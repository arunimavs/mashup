<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Display</title>
</head>
<body background="http://www.bluehorizonevents.co.uk/wp-content/uploads/bg1.jpg"">
<div style="margin-top:5%;margin-left:28%;text-align:center;border-radius:5px;width:300px;border :5px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<?php 

foreach($read as $row)
{
	$user=$row->name;
	$id1=$row->id;	
	$email=$row->email;
	$gender=$row->gender;
	$phone=$row->phone;
}?>
<p style="font-size: 30px">Registration Successful</p>
<p style="text-align:left;font-size: 20px;padding-left:10px">
<?php echo "Registration id : $id1 ";
echo "</br></br> Username : $user ";
echo "</br></br>Email : $email ";
echo "</br></br>Phone no : $phone ";
echo "</br></br>gender : $gender ";
?>
</p>
<form method="POST" action="http://localhost/project/index.php/update" style="margin:0px;padding: 10px;"> <input type="submit" name="update" value="update" style="margin:0px;padding: 10px;"><br>
</form>
<form  method="POST" action="http://localhost/project/index.php/delete" style="margin:0px;padding: 10px;"><input type="submit" name="delete" value="delete" style="margin:0px;padding: 10px;"><br></form>
</div>
</body>
</html>