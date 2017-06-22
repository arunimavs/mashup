<?php
$time = "082307";
$time1=$time;
echo "original string was ".$time1."\n\n";
$time = substr($time,0,2).':'.substr($time,2,2).':'.substr($time,4,2);
echo "New string is ";
echo $time;
echo "\n\n";


?>