<!DOCTYPE html>
<html>
<head>
	<title>4 Example</title>
	<?php
		if ($_GET["red"] == "Magic") {
	?>
		<link rel="stylesheet" type="text/css" href="style2.css">
	<?php
		} else { 
	?>
		<link rel="stylesheet" type="text/css" href="style1.css">
	<?php
		}
	?>
</head>
<body>

	<form>

		<input name="red" type="submit" value="Magic"/>

	</form>

</body>
</html>