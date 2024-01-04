		
		<main>
		
		<div class="banner" style="background-image: url(<?php echo INCLUDE_PATH;?>/images/banner.jpg);"></div>
		<div class="banner" style="background-image: url(<?php echo INCLUDE_PATH;?>images/banner1.jpg);"></div>
		<div class="banner" style="background-image:  url(<?php echo INCLUDE_PATH;?>images/banner2.jpg);"></div>

		<div class="circles">

			

		</div>
	

		<!--<div class="banner" style="background-image: url(<?php echo INCLUDE_PATH;?>/images/banner.jpg);"></div>
		<div class="banner" style="background-image: url(<?php echo INCLUDE_PATH;?>images/banner1.jpg);"></div>
		<div class="banner" style="background-image:  url(<?php echo INCLUDE_PATH;?>images/banner2.jpg);"></div>-->

		<div class="overlay"></div>

		<div class="center">

			<form method="post">
				
				<h2>Qual o seu melhor email?</h2>

				<input type="email" name="email" >
				<input type="hidden" name="identificadorHome" value='formHome'>
				<input type="submit" name="enviar" value="Cadastrar">

			</form>

		</div>

		

	</main>

	<section class="description" id="depoimentos">
		
		<div class="center">
			<div class="w50 left">

				<h2>Gabriel Vergílio</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

			<div class="w50 left">
				
				<img  class="rigth" src="<?php echo INCLUDE_PATH;?>images/foto.jpg">

			</div>

			<div class="clear"></div>

		</div>

	</section>

	<section class="habilidades">

		<div class="center"> 

			<h2 class="title">Especialidades</h2>
				
			<div class="habsBox w33 left">
				
				<div class="imgContainer"><img src="<?php echo INCLUDE_PATH;?>images/css3-alt.svg"></div>
				<h3>CSS3</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>

			</div>

			<div class="habsBox w33 left">
				
				<div class="imgContainer"><img src="<?php echo INCLUDE_PATH;?>images/html5.svg"></div>
				<h3>HTML5</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>

			</div>

			<div class="habsBox w33 left">
				
				<div class="imgContainer"><img src="<?php echo INCLUDE_PATH;?>images/js.svg"></div>
				<h3>JavaScript</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>

			</div>

			<div class="clear"></div>

		</div>

	</section>

	<section class="extras">
		
		<div class="center">
			<div  class="w50 left depoimentos">
				
				<h2 class="title">Depoimentos</h2>

				<?php 
					$sql = Database::connect()->prepare("SELECT * from `site_depoimentos` ORDER BY orderid ASC LIMIT 3");
					$sql->execute();
					$depoimentos = $sql->fetchAll();

					foreach($depoimentos as $key => $value) {
				?>

				<div class="depoiSingle">
					
					<p class="description">" <?php echo $value['content']?> " </p>

					<p class="author"><?php echo $value['nome']?></p>

				</div>

				<?php } ?>

			</div>

			<div id="servicos" class="w50 right services">
				
				<h2 class="title">Serviços</h2>

				<div class="servs">
					
					<ul>
					
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>

						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>

						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					
					</ul>

				</div>

			</div>

			<div class="clear"></div>
			
		</div>

	</section>