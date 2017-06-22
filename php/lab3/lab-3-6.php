<?php 

function ternary_Test($n){  
$r = $n > 30  ? "Number greater than 30"  : ($n > 20  ? "Number greater than 20"  : ($n >10  ? "Number greater than 10"  
: "Number less than 10!"));

echo $n." : ".$r."\n";  

}  
ternary_Test(36);  
ternary_Test(25);  
ternary_Test(14);  
ternary_Test(9);  
?>  
