<?php

$i=readline("Enter number : ");
fact($i);
function fact($i){
$factorial = 1;
for ($x=1;$x<=$i;$x++) {
  $factorial = $factorial * $x;
}
echo "Factorial of $i is $factorial\n\n";
}

?>