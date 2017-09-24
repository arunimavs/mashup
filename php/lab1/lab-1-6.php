<?php

$string="PHP is a widely-used open source general-purpose scripting language.";

$var= explode(" ",$string);

for($i=0;$i<count($var);$i++){
	echo $var[$i];
	echo " ";
}
?>