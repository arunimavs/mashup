<?php

$email="test@test.com";
$needle=".com";

function str_ends_with($email, $needle)
{
    if(strrpos($email, $needle) + strlen($needle) ===strlen($email)){
    	echo "yes, the string ends with .com \n\n";
    }
    else echo "no the string doesnot ends with .com\n\n";
}
str_ends_with($email,$needle);

?>