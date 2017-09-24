<?php  


function check_palindrome($string){  
  if ($string == strrev($string))  
      return 1;  
  else  
      return 0;  
}  

$x=readline("Enter string: ");
echo "\n\n";
$a=check_palindrome($x);  

if ($a==1)  
echo 'The string is a palindrome'."\n\n";  
else  
echo 'The string is not a palindrome'."\n"; 
?>


