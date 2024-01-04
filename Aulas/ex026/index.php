<?php

	abstract class test {

		public function matarAkinori()
		{

			echo "Akinori não vive mais :(";

		}

		abstract function func2();


	}

	class main extends test {

		public function func2() {

			echo "<br> Viva, Akinori!";

		}

		public static function staticMet() {

			echo "Static";

		}

		public function func3() {

			self::staticMet();

		}

	}

	$main = new main();
	$main->matarAkinori();
	$main->func2();
	$main->func3();

	//main::staticMet();

?>