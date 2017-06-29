<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body background="https://i.stack.imgur.com/tN6LC.jpg">
<p style="margin-top:3%;text-align:center;font-size:40px;"><b>CALCULATOR</b></p>
<div style="margin-top:11%;margin-left:28%;text-align:left;border-radius:5px;width:300px;height:auto;background-color:#5fbdce;padding:20px;">

<?php if($_POST){

	$first_no=$_POST["text1"];
	$second_no=$_POST["text2"];
	$symbol=$_POST["add"];?>
	<br>
	<br><br>
	<form method="POST" action="calc.php" ">
	Enter first no:<br>
	<input type="text" name="text1"><br><br>
	Enter second no :<br>
	<input type="text" name="text2"><br><br>
	<button type="submit" name="add" value="+">+</button> 
	<button type="submit" name="add" value="-">-</button> 
	<button type="submit" name="add" value="*">x</button> 
	<button type="submit" name="add"  value="/">/</button> 
	</form><br><br>

	<?php if(!empty($first_no)&&!empty($second_no)){

        if(is_numeric(trim($first_no))&&is_numeric(trim($second_no))){
						switch ($symbol){
    					case "+":
    					echo "$first_no + $second_no =  ";
       					echo $first_no+$second_no;
        				break;
    					case "-":
    					echo "$first_no - $second_no =  ";
        				echo $first_no-$second_no;
        				break;
    					case "*":
    					echo "$first_no x $second_no =  ";
        				echo $first_no*$second_no;
        				break;
        				case "/":
        				echo "$first_no / $second_no =  ";
        				echo $first_no/$second_no;
        				break;
    					default:
        				echo "Cant do other operations";
							}

						}
						else { echo "Enter a valid number";}

															}
				else { echo " Enter two values"; }
				} 
				
 else{ ?>
<form method="POST" action="calc.php">
Enter first no:<br>
<input type="text" name="text1"><br><br>
Enter second no :<br>
<input type="text" name="text2"><br><br>
<button type="submit" name="add" value="+">+</button> 
<button type="submit" name="add" value="-">-</button> 
<button type="submit" name="add" value="*">x</button> 
<button type="submit" name="add"  value="/">/</button><br><br>
</form>
<?php }?>
</div>
</body>
</html>