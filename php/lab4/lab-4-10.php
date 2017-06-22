<?php  
$str = readline("Enter character: ");  
$str2 = ++$str;    
if (strlen($str2) > 1){  
 $str2 = $str2[0];  
 }  
echo $str2."\n"; 

?>