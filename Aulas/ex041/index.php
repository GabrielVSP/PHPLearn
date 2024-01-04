<?php

	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos < 50");

	$sql->execute();
	$list = $sql->fetchAll();

	foreach ($list as $key => $value) {
		
		echo $value['nome'] . '<br>';

	}

?>