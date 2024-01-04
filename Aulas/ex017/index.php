</<?php 
                                                      
	date_default_timezone_set("America/Sao_Paulo");

	$data = date("d/m/y");
	$hour = date("H:i:s", time()*(60 * 5));

	//echo "<p>Data: $data </p>Hora: $hour";

	include('header.php');

	echo "<h1>Hello, world!</h1>";

 ?>


 <?php

 	include("footer.php");

?>