<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM posts WHERE `categoria_id` = (SELECT id FROM categorias WHERE nome = 'Geral')");

	$sql->execute();
	$list = $sql->fetchAll();

	foreach ($list as $key => $value) {
		
		echo $value['content'] . '<br>';

	}

?>