<?php

	//include('class.php');
	include 'class.php';
	$classe = new Exemplo();
	$classe1 = new Exemplo();

	$classe->var2 = "Gabriel";
	$classe1->var2 = "Leo";

	echo $classe->var2;
	echo $classe1->var2;

	echo "<br>" . Exemplo::$var3;
	Exemplo::eldiablo();

	$classe1->setVar1('drive');
	echo $classe1->getVar1();

?>