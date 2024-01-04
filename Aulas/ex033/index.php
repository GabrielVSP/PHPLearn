<?php
	
	date_default_timezone_set('America/Sao_Paulo');

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

	if (isset($_POST['submit']))
	{

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$nasc = date('Y-m-d H:i:s');

		/*$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, 'Leo', 'aa', '2018-08-09 15:00:00')");*/
		$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");

		$sql->execute([$nome, $sobrenome, $nasc]);

		echo "Cliente cadastrado com sucesso";

	}	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do banco</title>
</head>
<body>

	<form method="post">
		
		<p>
			
			<label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" required>

		</p>

		<p>
			
			<label for="sobrenome">Sobrenome:</label>
			<input type="text" name="sobrenome" id="sobrenome" required>

		</p>

		<input type="submit" name="submit">

	</form>

</body>
</html>
