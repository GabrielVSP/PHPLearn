<?php

	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	//LIKE
	//$sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%a%'");

	//IN
	//$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,4,3)");

	$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2005-01-01' AND '2006-08-20'");

	$sql->execute();
	$nomes = $sql->fetchAll();

	foreach ($nomes as $key => $value) {
		
		echo $value['nome'] . "<br>";

	}

?>