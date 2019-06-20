<?php
	$perro = [
		"nombre" => "mario",
		"color" => "negro",
		"patas" => 4,
		"raza" => "dogo",
		"edad" => 22
	];
	foreach ($perro as $key => $value) {
		echo "<b>".$key."</b> :".$value."<br>";
	}

	echo "<br>";

	/////////////////////
	$cars = array("Volvo", "BMW", "Toyota");

	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br><br>";

	foreach ($cars as $key => $value) {
		echo "<b>".$key."</b> :".$value."<br>";
	}
?>


