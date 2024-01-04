<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>

	<?php

		//para método get

		if (isset($_GET['action']))
		{

			$nome = @$_GET['nome'];
			$email = @$_GET['email'];

			echo "$nome $email";

		}

		//para metodo post

		/*if (isset($_POST['action']))
		{

			$nome = @$_POST['nome'];
			$email = @$_POST['email'];

			echo "$nome $email";

		}*/

		if (isset($_POST['action']))
		{

			$num1 = @$_POST['num1'];
			$num2 = @$_POST['num2'];
			$comida = @$_POST['comida'];

			echo $num1 + $num2;
			echo "<p>$comida</p>";
			
			foreach ($_POST['val'] as $key => $value) {
				
				echo "$value <br>";

			}
		}

	?>

	<!--<form method="post">
		
		<p><input type="text" name="nome"></p>
		<p><input type="email" name="email"></p>
		<p> <input type="submit" name="action" value="Enviar"> </p>

	</form>-->

	<form method="post">
		
		<p><input type="number" name="num1"></p>
		<p><input type="number" name="num2"></p>

		<p> <input type="checkbox" name="val[]" value="10">10 </p>
		<p> <input type="checkbox" name="val[]" value="20">20 </p>
		<p> <input type="checkbox" name="val[]" value="30">30 </p>


		<select name="comida">
			
			<option value="carne">Carne</option>
			<option value="fruta">Frutas</option>

		</select>

		<p> <input type="submit" name="action" value="Enviar"> </p>

		


	</form>

</body>
</html>