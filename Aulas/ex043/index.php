<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	$sql = 'CREATE TABLE profissao (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(50) NOT NULL
	)';

	$pdo->exec($sql);

	/*$tables = $pdo->query("SHOW TABLES");
	$tables = $tables->fetchAll();

	echo "<pre>";
	print_r($tables);
	echo "<pre>";*/

	/*$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos < 50");

	$sql->execute();
	$list = $sql->fetchAll();

	foreach ($list as $key => $value) {
		
		echo $value['nome'] . '<br>';

	}*/

?>