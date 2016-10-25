<!DOCTYPE html>
<html>
<head>
	<title>3b Example</title>
</head>
<body>

	<form>
		<input type="text" name="x" />
		<select name="op">
    		<option value="add">+</option>
    		<option value="sub">_</option>
    		<option value="mult">*</option>
   			<option value="div">/</option>
		</select>
		<input type="text" name="y" />
		<input type="submit"/>
	</form>

<?php
    if ($_GET)  {

        if ($_GET["op"]== "add") {
            echo ($_GET["x"] + $_GET["y"]);
        }
        if ($_GET["op"]== "sub") {
            echo ($_GET["x"] - $_GET["y"]);
        }
        if ($_GET["op"]== "mult") {
            echo ($_GET["x"] * $_GET["y"]);
        }
        if ($_GET["op"]== "div") {
            echo ($_GET["x"] / $_GET["y"]);
        }
    }
?>
