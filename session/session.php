<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
<body>
<?php if($_SESSION['isLoggedIn']==true){ 
									
								header("Location:direct.php");}
else{ 


  if($_POST){
  			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "Eventreg";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
    		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
					  				  } 


			$sql5="SELECT * FROM session_login WHERE id=1";
     			$result5 = $conn->query($sql5);
     			if ($result5->num_rows > 0) {
    			// output data of each row
    			while($row = $result5->fetch_assoc()) {

    				$user1=$row["user"];
    				$pass1=$row["pass"];
    				
    												 }
    										}
  				$user=$_POST['username'];
  				$pass=$_POST['password'];
  				if(($user=="$user1")&&($pass=="$pass1")){
				  $_SESSION['isLoggedIn'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['login'] = $user;
					header("Location:direct.php");

														}
				else { echo "Wrong user name or password";} 
			}
																	

else{ ?>

<h2>Enter Username and Password</h2> 
<div class = "container form-signin">
</div>

<div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "session.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required ></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required ><br><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         
         
      </div> 
<?php  } }?>
</body>
</html>