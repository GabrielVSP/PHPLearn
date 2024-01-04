<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	$id = 2;

	$sql = $pdo->prepare("UPDATE `clientes` SET nome=?,sobrenome=? WHERE nome=? AND sobrenome=?/*id=$id*/");

	if ($sql->execute(["Diablo", "Jamble", "Rodrigues", "Batista"]))
	{
		echo "Cliente atualizado";

	}

?>