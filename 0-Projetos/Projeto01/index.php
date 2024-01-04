<?php include("config.php");?>

<?php 

	Site::updateOnlineUsers(); 
	Site::count();

?>

<?php 
		
			/*if (isset($_POST['enviar']) && isset($_POST['identificadorHome']))
			{

				$mail = $_POST['email'];

				if ($mail !='')
				{

					if (filter_var($mail, FILTER_VALIDATE_EMAIL))
					{

						$email = new email('smtp.gmail.com', 'gabrielverg134s@gmail.com', "Roblox12345", 'Gabriel');
						$email->addAdress('gabrielverg134s@gmail.com', 'Gabriel');

						$email->format(['assunto'=>'Novo email cadastrado', 'corpo'=>'Usuário cadastrado: $mail']);

						if($email->sendEmail())
						{

							echo "<script>alert('E-mail enviado com sucesso-HOME!')</script>";

						}
						else
						{

							echo "<script>alert('Desculpe! Algo deu errado :(')</script>";

						}

					}
					
					else
					{
						echo "<script>alert('E-mail inválido')</script>";
					}

				}
				else
				{

					echo "<script>alert('campos vazios não permitidos')</script>";

				}
				

			}
			else if  (isset($_POST['enviar']) && isset($_POST['identificadorContato']))
			{
						
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$tel = $_POST['telefone'];
				$msg = $_POST['mensagem'];

				$assunto = 'Nova mensagem do site';
				$corpo = "<p>De: " . ucfirst($nome) .  "</p>
							<p>Email: $email</p>
							<p>Telefone: $tel</p>
							
							<hr>

							<p>'- $msg '</p>
							
							";

				$email = new email('smtp.gmail.com', 'gabrielverg134s@gmail.com', "Roblox12345", 'Gabriel');
				$email->addAdress('gabrielverg134s@gmail.com', 'Gabriel');

				$email->format(['assunto'=>"$assunto", 'corpo'=>"$corpo"]);

				if($email->sendEmail())
				{

					echo "<script>alert('E-mail enviado com sucesso!-CONTATO')</script>";

				}
				else
				{

					echo "<script>alert('Desculpe! Algo deu errado :(')</script>";

				}

				echo $corpo;


			}*/
		?>
	

	<!DOCTYPE html>
<html lang="pt-br">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto - 1</title>

	<meta name="description" content="Descrição hehe">
	<meta name="keywords" content="olá, mundo, !">
	<meta name="author" content="Gabriel Vergílio">

	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>mediaqueries.css">

	<link rel="shortcut icon" href="images/favicon-16x16.png" type="image/x-icon">

</head>
<body>

	<base base="<?php echo INCLUDE_PATH;?>">

	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {
			case 'depoimentos':
				
				echo '<target target="depoimentos" />';

				break;

			case 'servicos':

				echo '<target target="servicos" />';

				break;

			default:

				echo '<target target="home" />';

				break;
			
		}

	?>

	<div class="success">
		<p>O formulário foi enviado com sucesso!</p>
	</div>

	<div class="error">
		<p>Desculpe! O formulário não foi enviado.</p>
	</div>

	<div class="overlayLoad">
		<img src="<?php echo INCLUDE_PATH;?>images/spinner.gif" alt="carregando">
	</div>

	<header id="home">
		
		<div class="center">

			<div class="logo left">
				
				<a>Logomarca</a>

			</div>

			<nav class="desktop right">
				
				<a href="<?php echo INCLUDE_PATH;?>">Home</a>
				<a href="<?php echo INCLUDE_PATH;?>depoimentos">Sobre</a>
				<a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a>
				<a href="<?php echo INCLUDE_PATH?>contato" realtime="contato">Contato</a>

			</nav>



			<nav class="mobile right">
				
				<div class="mobileMenu">
					<img src="https://mcauliffestevens.co.nz/wp-content/uploads/2020/01/588a64f5d06f6719692a2d13-1024x1024.png" class="bars">
				</div>

				<ul>

					<li><a href="<?php echo INCLUDE_PATH;?>">Home</a>
					<li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Sobre</a>
					<li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH;?>contato">Contato</a>

				</ul>

			</nav>

			<div class="clear"></div>

	</header>

	

	<section class="pages">

		<?php

			if (file_exists('pages/' . $url . '.php'))
			{

				include('pages/' . $url . '.php');

			}
			else
			{

				if ($url != 'depoimentos' && $url != 'servicos') {
					
					$page404 = true;
					include('pages/404.php');

				}
				else
				{

					include("pages/home.php");

				}

			}

		?>

	</section>

	<footer <?php if (isset($page404) && $page404 == true) {
		echo 'class="fixed"'; }?>
	>
		
		<p>Todos os direitos reservados</p>

	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>scripts/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>scripts/main.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>scripts/constants.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>scripts/forms.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>scripts/slider.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>scripts/anim.js"></script>

	<?php if ($url == 'contato') {?>

		<script src='https://maps.googleapis.com?maps/api/js?v=3.xp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
		<script src='<?php echo INCLUDE_PATH; ?>scripts/map.js'></script>
	
	<?php } ?>

</body>
</html>