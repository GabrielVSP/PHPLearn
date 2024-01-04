<?php

	include("interface1.php");

	class Test implements Interface1{

		public function printTxt($txt) {

			echo "$txt";

		}

	}

	$test = new Test();

	$test->printTxt("Helooo");

?>