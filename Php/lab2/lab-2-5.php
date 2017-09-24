<?php  

$string1 = 'Hello world';
$string2 = 'Hello world';
if(substr_compare($string1,$string2,0)===0){
	echo "Yes Strings are equal\n\n";
}

?>