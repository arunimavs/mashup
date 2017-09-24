<?php  
$str1 = readline("Enter String 1 ");  
$str2 = readline("Enter String 2 "); 
$str3 = strspn($str1 ^ $str2, "\0");  
printf('First difference between two strings at position %d: "%s" vs "%s"',  
$str3+1, $str1[$str3], $str2[$str3]); 
 
printf("\n");  
?>  