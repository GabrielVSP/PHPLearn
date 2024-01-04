<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	/*$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=2");

	$sql->execute();

	$info = $sql->fetchAll();

	/*echo "<pre>";
	print_r($info);
	echo "<pre>";

	foreach ($info as $key => $value) {
		
		echo "<h2>" . $value['title'] . "</h2>";
		echo "<p>" . $value['content'] . "</p>";
		echo "<hr>";

	}*/

	/*$sql = $pdo->prepare("SELECT * FROM categorias");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		
		$catId = $value['id'];
		echo "Exibindo posts de: " . $value['nome'];

		echo "<br>";

		$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=$catId");
		$sql->execute();

		$infoPosts = $sql->fetchAll();

		foreach ($infoPosts as $key => $value) {
		
			echo "<h2>" . $value['title'] . "</h2>";
			echo "<p>" . $value['content'] . "</p>";
			echo "<hr>";

		}

	}*/

	$sql = $pdo->prepare("SELECT `posts`.*, categorias.*, posts.id as `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

	$sql->execute();

	$info = $sql->fetchAll($pdo::FETCH_ASSOC);

	echo "<pre>";
	print_r($info);
	echo "</pre>";

?>