<?php

	$cont = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	$nome = "Gabriel Vergílio";
	$nomes = explode(" ", $nome);
	$cont1 = "<h1>Hello</h1>fora da tag";

	echo substr($cont, 0, 20);
	echo "<br>";

	print_r($nomes);
	echo "<br>";

	echo implode(" ", $nomes);
	echo "<br>";

	echo strip_tags($cont1);
	echo "<br>";

	echo htmlentities("<div></div>");

?>

