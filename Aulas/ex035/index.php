<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	$id = 2;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if ($sql->execute([5]))
	{
		echo "Cliente deletado!";

	}

?>