<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="https://static1.squarespace.com/static/5280039de4b09c1d9bf144df/t/56be86e32b8dde7190bcc773/1455326950939/Silver-Blur-Background-Wallpaper.jpg?format=1500w">
<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Eventreg";
$user = $_POST["name"];
$email = $_POST["pass"];
$gender= $_POST["gender"];
$phoneno=$_POST["phone1"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
			}



if (empty($user)){  
echo "username is empty.fill in the username\n"; 
 				 } ?>

<br>

<?php
if (empty($email)){  
echo "email is empty.fill in the email\n"; 
				  } ?><br>

<?php
if (empty($phoneno)){  
echo "phoneno is empty.fill in the phone no\n"; 
 					} ?><br>

 <?php
if (empty($gender)){  
echo "gender is empty.fill in the gender\n"; 
 					} ?><br>

<div style="margin-top:5%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :5px solid #e00c2e;height:auto;background-color:rgb(249,249,249);padding:20px;">



<?php 

$sql = "INSERT INTO reg(name,email,gender,phone)
VALUES (\"$user\", \"$email\",\"$gender\",\"$phoneno\")";


if (!(empty($email))&&!(empty($user))&&!(empty($phoneno))){
	if(mysqli_query($conn, $sql)){
    echo nl2br("Registration successful\n\n");
     $last_id = $conn->insert_id;

     $sql1="SELECT * FROM reg WHERE id=\"$last_id\"";
     $result = $conn->query($sql1);
     if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
    <b><?php
        echo nl2br("Name: ". $row["name"]."\n\n"." Email: ". $row["email"]."\n\n". "Gender : " . $row["gender"]."\n\n"." Phone no: ". $row["phone"]);
        
    									 }
								} 
else {
    echo "0 results";
	 }
?>  </b><form method="POST" action="update.php">
			<input type="submit" name="p" value="Update" style="margin:10px;padding: 10px;">
		</form>
		<form method="POST" action="view.php">
			<input type="submit" name="q" value="Delete my account" style="margin:10px;padding: 10px;">			 
		</form>
</div>





<?php 

								 } 
														   }
else {
    echo "Cant sign up for : " . $sql . "<br>" . mysqli_error($conn);
	 }

}


else { ?>

<div style="margin-top:5%;margin-left:28%;text-align:left;border-radius:5px;width:300px;border :5px solid #e00c2e;height:auto;background-color:rgb(249,249,249);">
  <p style="text-align: center;margin-top: 10px;padding-top: 10px;">Register for YD-2018</p><br>
	<form method="POST" action="new.php" style="margin:0px;padding: 10px;"><br>
	   Name :<br>
		<input type="text" name="name" style="margin:0px;padding: 10px;"><br><br>
		Email :<br>
		<input type="text" name="pass" style="margin:0px;padding: 10px;"><br><br>
		Phone no :<br>
		<input type="text" name="phone1" style="margin:0px;padding: 10px;"><br><br>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br><br><br>
		<input type="submit" name="Enter" value=" Enter" style="margin:0px;padding: 10px;"><br><br>
	</form>
</div>

<?php } ?>


</body>
</html>