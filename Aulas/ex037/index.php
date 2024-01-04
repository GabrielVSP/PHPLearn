<?php

	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');
	/*$sql = $pdo->prepare("SELECT * FROM clientes /*GROUP BY cargo ORDER BY id DESC LIMIT 1,3 ");

	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		
		echo "<br>";
		echo $value['nome'];

	}*/

	$sql = $pdo->prepare("SELECT * FROM clientes RIGHT JOIN cargos ON clientes.cargo = cargos.id");

	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		
		echo "<br>";
		echo $value['nome'] . " - " . $value['nome_cargo'];

	}

?>