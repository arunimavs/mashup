<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
</head>
<body background="http://www.bluehorizonevents.co.uk/wp-content/uploads/bg1.jpg"">
<div style="margin-top:5%;margin-left:28%;text-align:center;border-radius:5px;width:300px;border :5px solid #030407;height:auto;background-color:#dcdcdc;font-family:sans-serif;">
<?php 
foreach($delete_display as $row)
{
	$user=$row->name;
	$id1=$row->id;}
?>
<p style="font-size: 30px"> Your Account with</p>
<p style="text-align:left;font-size: 20px;padding-left:10px">
<?php echo "Registration id : $id1 ";
echo "</br></br> Username : $user ";?></p>
<p style="font-size: 30px"> Deleted</p>
</div>
</body>
</html>