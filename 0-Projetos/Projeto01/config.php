<?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');

	$autoload = function($class){

		require_once("classes/$class.php");

	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH', 'http://localhost/cursoDanki/0-Projetos/Projeto01/');
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . "painel/");
	define('BASE_DIR_PAINEL', __DIR__ . '/painel');

	//CONSTANTE NOME DA EMPRESA
	define('NOME_EMPRESA', 'Atlas Industry');

	//CONSTANTES BANCO DE DADOS
	define('HOST', 'localhost');
	define('USER', 'root');
	define("PASSWORD", '');
	define('DATABASE', 'projeto_01');

	

	function getRole($index) {


		return Painel::$cargos[$index];

	}

	function selectMenu($par) {

		$url = explode('/', @$_GET['url'])[0];

		if ($url == $par) {

			echo 'class="activeMenu"';

		}

	}

	function verifyPermMenu($perm) {

		if ($_SESSION['cargo'] <= $perm) {

			return;
			
		}
		else
		{

			echo "style='display: none'";

		}

	}

	function verifyPermPage($perm) {

		if ($_SESSION['cargo'] <= $perm) {

			return;
			
		}
		else
		{

			include("painel/pages/deny-perm.php");
			die();

		}

	}

?>