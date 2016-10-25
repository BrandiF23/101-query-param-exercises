<?php
	if ($_GET)	{

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

	// if ($_GET) {
	// 	function sum($x, $y) {
 //   		 $z = $x + $y;
 //    		return $z;
	// 	}

	// 	echo sum($_GET["x"], $_GET["y"]);
	// }
?>