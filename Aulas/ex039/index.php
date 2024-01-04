<?php

	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$pdo->exec("LOCK TABLES clientes WRITE");
	sleep(10);

?>