<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body background="http://www.samplestemplates.com/wp-content/uploads/2017/03/Yearbook-Powerpoint-Template-6.jpg">
<p style="margin-top:23%;text-align:center;font-size:40px;"><b>CALCULATOR</b></p>
<div style="margin-top:2%;margin-left:37%;text-align:left;border-radius:5px;width:300px;height:auto;background-color:#e7003e;padding:20px;">

<?php if($_POST){

	$first_no=$_POST["text1"];?>
	<form method="POST" action="calcu.php">

Enter :<br><br>
<input type="text" name="text1" value="<?php if(isset($_POST['text1'])) { echo htmlentities ($_POST['text1']); }?>"><br><br>

<button type="submit" name="add" value="Enter">Enter</button><br><br> 

<?php function strstr_after($haystack, $needle, $case_insensitive = false) {
    $strpos = ($case_insensitive) ? 'stripos' : 'strpos';
    $pos = $strpos($haystack, $needle);
    if (is_int($pos)) {
        return substr($haystack, $pos + strlen($needle));
    					}
    // Most likely false or null
    return $pos;
																		}

if(strpos($first_no,"+")>0 && (substr_count($first_no,"+"))==1){
	$entry1= strstr_after($first_no, '+');
	$entry2 = strstr($first_no, '+', true);
	trim($entry1," ");
	trim($entry2," ");
	if((is_numeric(trim($entry1," ")))&&(is_numeric(trim($entry2," ")))){
 	echo $entry1+$entry2;
 													}
 	else{ echo "Entered value is not number";}
																}

else if(strpos($first_no,"-")>0 && (substr_count($first_no,"-"))==1){
	$entry1= strstr_after($first_no, '-');
	$entry2 = strstr($first_no, '-', true);
	if((is_numeric(trim($entry1," ")))&&(is_numeric(trim($entry2," ")))){
 	echo $entry2- $entry1;
 													}
 	else{ echo "Entered value is not number";}
																}
else if(strpos($first_no,"*")>0 && (substr_count($first_no,"*"))==1){
	$entry1= strstr_after($first_no, '*');
	$entry2 = strstr($first_no, '*', true);
	if((is_numeric(trim($entry1," ")))&&(is_numeric(trim($entry2," ")))){
 	echo $entry1*$entry2;
 													}
 	else{ echo "Entered value is not number";}
																}	
else if(strpos($first_no,"/")>0 && (substr_count($first_no,"/"))==1){
	$entry1= strstr_after($first_no, '/');
	$entry2 = strstr($first_no, '/', true);
	if((is_numeric(trim($entry1," ")))&&(is_numeric(trim($entry2," ")))){
 	echo $entry2/$entry1;
 													}
 	else{ echo "Entered value is not number";}
																}														
else { echo "Not possible";
	}


 }
 else { ?>
<form method="POST" action="calcu.php">
Enter no : <br><br>
<input type="text" name="text1"><br><br>

<button type="submit" name="add" value="Enter">Enter</button> 

</form>
<?php }?>
</div>
</body>
</html>