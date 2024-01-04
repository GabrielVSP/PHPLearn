<?php

	$nome = "Gabriel";

	switch ($nome) {

		case 'Gabriel':
			
			echo "Hello, Gabriel!";
			break;
		
		default:
			
			echo "Hello, $nome";
			break;
	}

	for ($i = 0; $i < 10; $i++)
	{

		if ($i == 5)
		{

			continue;

		}

		echo "$i <hr>";

	}

?>