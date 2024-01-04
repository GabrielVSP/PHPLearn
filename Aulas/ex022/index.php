<?php

	session_start();
	setcookie("name", "Gabriel V", time() + 60,'/');

	$_SESSION['none'] = 'Gabriel';

	echo $_COOKIE['name'];

?>