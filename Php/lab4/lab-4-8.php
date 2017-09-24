<?php  

$str = readline( "Enter string : ");  

echo preg_replace('/the/', 'That', $str, 1)."\n";   

?>  