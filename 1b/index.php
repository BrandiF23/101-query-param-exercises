<?php
	if($_GET["password"]) {
		if($_GET["password"] == "banana") {
			echo 'Success';
		} else {
			echo 'Invalid Password...try again';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>1b</title>
</head>
<body>

	<form>
		<input type="text" name="password">
		<input type="submit">
	</form>

</body>
</html>