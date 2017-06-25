<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="https://static1.squarespace.com/static/5280039de4b09c1d9bf144df/t/56be86e32b8dde7190bcc773/1455326950939/Silver-Blur-Background-Wallpaper.jpg?format=1500w">

<?php if($_POST){?>
<div style="margin-top:5%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :5px solid #e00c2e;height:auto;background-color:rgb(249,249,249);padding:20px;">
			
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "Eventreg";
			$user = $_POST["name"];
			$email = $_POST["pass"];
			$gender= $_POST["gender"];
			$phoneno=$_POST["phone1"];
			

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
	
			
			if (!empty($user)){  
			$sql1 = "UPDATE reg SET name=\"$user\" WHERE id=$p1";

 				 			  } 

 				 		else{
 			$sql1 = "UPDATE reg SET name=\"$user1\" WHERE id=$p1";	 			
 				 		}



 			if (!empty($email)){  
			$sql2 = "UPDATE reg SET  email=\"$email\" WHERE id=$p1";
 				 			  }

 				 		else{
 			$sql2 = "UPDATE reg SET  email=\"$email1\" WHERE id=$p1";	 			
 				 			}



 			if (!empty($gender)){  
			$sql3 = "UPDATE reg SET gender=\"$gender\" WHERE id=$p1";
 				 			  	} 
 				 		else{
 			$sql3 = "UPDATE reg SET gender=\"$gender1\" WHERE id=$p1";	 			
 				 			}



 			if (!empty($phoneno)){  
			$sql4 = "UPDATE reg SET phone=\"$phoneno\" WHERE id=$p1";
 				 			  } 
 				 		else{
 			$sql4 = "UPDATE reg SET phone=\"$phoneno1\" WHERE id=$p1";
 				 		}

 			if (($conn->query($sql1) === TRUE)&&($conn->query($sql2) === TRUE)&&($conn->query($sql3) === TRUE)&&($conn->query($sql4) === TRUE)){

 				echo nl2br("Updated account successfully\n\n");
 			}
 			else{ echo "Updation error : ".$conn->error;}

    			$query = "SELECT max(id) FROM reg";    			
    			$result1 = $conn->query($query);
				$value = $result1->fetch_array(MYSQLI_NUM);
				$p1=$value[0];
     			$sql="SELECT * FROM reg WHERE id=$p1";
     			$result = $conn->query($sql);
     			if ($result->num_rows > 0) {
    			// output data of each row
    			while($row = $result->fetch_assoc()) {?>
    			<b><?php
        		echo nl2br("Name: ". $row["name"]."\n\n"." Email: ". $row["email"]."\n\n". "Gender : " . $row["gender"]."\n\n"." Phone no: ". $row["phone"]);
        											 }
    									 	}
										} 


?></b></div>
</body>
</html>
