<?php

$email  = readline("Enter email : "); 

$user = strstr($email, '@', true); 

echo "Username is : ".$user."\n";  
?>