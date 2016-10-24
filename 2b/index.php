<!DOCTYPE html>
<html>
<head>
	<title>2a Example</title>
</head>
<body>

<form>
	<input type="text" name="name">
	<input type="submit">
</form>

<?php
	if ($_GET) {


		if ($_GET["name"] == "Brandi") {
			echo "Hi, Brandi!";
		} else {
			echo "Sorry, You're Not Welcome";
		}
	}
?>