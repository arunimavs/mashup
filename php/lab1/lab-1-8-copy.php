<?php

$input = array('PHP', 'is', 'a', 'widely-used', 'open', 'source', 'general-purpose', 'scripting','language');

echo "\n\n";
for($i=0;$i<count($input);$i++){
	echo $input[$i];
	echo " ";
}
echo "\n\n";

for($i=0;$i<count($input);$i++){
	echo $input[$i];
	echo "-";
}
echo "\n\n";

for($i=0;$i<count($input);$i++){
	echo $input[$i];
	echo "\n";
}
echo "\n\n";

?>