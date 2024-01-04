<?php

	echo "<h1>For loop</h1>";

	$count = 0;
	$cnt = 0;

	for ($cont = 0; $cont < 10; $cont++)
	{

		echo "Olá, mundo! <br>";
	}

	echo "<hr>";
	echo "<h1>While loop</h1>";

	while ($count <= 10) 
	{
		
		echo "Hello, world! <br>";

		$count += 1;

	}

	echo "<hr>";
	echo "<h1>Do while loop</h1>";

	do {

		echo "Hola, mundito! <br>";
		$cnt += 1;

	}while($cnt <= 10);

?>