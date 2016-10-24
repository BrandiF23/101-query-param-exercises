<!DOCTYPE html>
<html>
<head>
	<title>3b Example</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="first" />
		<select name="method">
    		<option>+</option>
    		<option>_</option>
    		<option>*</option>
   			 <option>/</option>
		</select>
		<input type="text" name="second" />
		<input type="submit" value="Equals" />
	</form>

<?php

	if (isset($_POST['first']) && isset($_POST['second'])) {
   	 	$first = $_POST['first'];
    	$second = $_POST['second'];
    	$method = $_POST['method'];
    	switch($method) {
        	case '+':
            	$result = $first + $second;
            	break;
        	case '-':
            	$result = $first - $second;
            	break;
        	case '*':
            	$result = $first * $second;
            	break;
        	case '/':
       			$result = $first / $second;
           		break;
        	default:
        		$result = 'undefined operation';
            	break;
    } echo $result;
}

?>
