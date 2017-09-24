<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="https://static1.squarespace.com/static/5280039de4b09c1d9bf144df/t/56be86e32b8dde7190bcc773/1455326950939/Silver-Blur-Background-Wallpaper.jpg?format=1500w">


  <?php if($_POST) {?>

     <div style="margin-top:5%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :5px solid #e00c2e;height:auto;background-color:rgb(249,249,249);">
  		<p style="text-align: center;margin-top: 10px;padding-top: 5px;">Register for YD-2018</p><br>
  		<p style="margin-left:10px;"> Edit to change existing details </p>
			
			<?php
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

    	$sql2 = "SELECT * FROM reg WHERE id=$p1";
    	$result = $conn->query($sql2);
    
     if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
	<form method="POST" action="update2.php" style="margin:0px;padding: 10px;">
	   Name : <?php echo $row["name"] ?> <br>
	   
		<input type="text" name="name" style="margin:0px;padding: 10px;"><br><br>
		Email :<?php echo $row["email"] ?><br>
		<input type="text" name="pass" style="margin:0px;padding: 10px;"><br><br>
		Phone no : <?php echo $row["phone"] ?><br>
		<input type="text" name="phone1" style="margin:0px;padding: 10px;"><br><br>
		<?php echo  "Gender : ".$row["gender"] ?><br><br><?php   }}} ?>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br><br><br>
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>
	</form>
</div>



</body>
</html>