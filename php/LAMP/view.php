<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="http://kindertravelguide.com/wp-content/uploads/2016/01/Light-Grey-Background-3.jpg">

<div style="margin-top:5%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :5px solid #e00c2e;height:auto;background-color:rgb(249,249,249);padding:20px;">

<?php
if($_POST){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Eventreg";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
					  } 

	$query = "SELECT max(id) FROM reg";
	$result = $conn->query($query);
	$value = $result->fetch_array(MYSQLI_NUM);
	$p1=$value[0];


	$sql5="SELECT * FROM reg WHERE id=$p1";
     			$result5 = $conn->query($sql5);
     			if ($result5->num_rows > 0) {
    			// output data of each row
    			while($row = $result5->fetch_assoc()) {

    				$user1=$row["name"];
    				$email1=$row["email"];
    				$gender1=$row["gender"];
    				$phoneno1=$row["phone"];
    												 }
    										}
	

    $sql2 = "DELETE FROM reg WHERE id=$p1";



	if ($conn->query($sql2) === TRUE) {
    echo "Your account with id no : ".$p1." and user name : ".$user1." deleted successfully";
									  } 
	else {
    echo "Error deleting record: " . $conn->error;
		 }

}
?>

</div>


</body>
</html>