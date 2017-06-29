


<?php 
session_start();
if($_SESSION['isLoggedIn']==true) { ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if($_POST){
								         
unset($_SESSION['isLoggedIn']);
   
echo 'You have cleaned session';
header('Refresh: 3; URL = session.php');
		  }
else{
			
	echo "logged in with valid id";

?>
<form method="POST" action="direct.php">
			<input type = "submit" name = "logout" value="Logout"></form>
</body>
</html>
<?php } } 
   
 else { 

echo "You dont have access to this page"; }?>

