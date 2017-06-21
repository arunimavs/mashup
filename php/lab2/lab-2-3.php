<?php

$email="test@test.com";
$needle=".com";

function str_ends_with($email, $needle){
    return substr_compare($haystack, $needle, -strlen($needle)) 
           === 0;
}

str_ends_with($email,);

?>