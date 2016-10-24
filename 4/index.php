<!DOCTYPE html>
<html>
<head>
	<title>4 Example</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (!$style)?'normal':$style ?>.css" />
	
</head>
<body>

	<form>

		</select>
		<input type="submit" value="Color Switch" />
	</form>

<?php
	
	if(condition1 === true) {
    	echo "<button style=\"background-color: blue;\">Blue</button>";
	} else {
    	echo "<button style=\"background-color: red;\">Red</button>";
	}

?>