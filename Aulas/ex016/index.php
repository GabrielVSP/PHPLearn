<?php

	$data = date("d/m/y");

	echo $data;

	function showName($name, $idade) {

		echo "<p>Olá, $name!</p>";
		echo "<p>Sua idade é: $idade</p>";

	}

	function calc($num1 = 0, $num2 = 0) {

		echo $num1 + $num2;

	}

	showName("Gabriel", 16);
	calc(20);

?>