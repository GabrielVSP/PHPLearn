<?php

	class Child {

		protected function kill()
		{

			echo "Akinoir está morto";

		}

		public function print()
		{

			echo "Hello, world!";

		}

	}

	class Paren extends Child{ 

		public function goodbye()
		{

			echo "Bye, world!";
			$this->kill();

		}

	}

	$parent = new Paren;
	$child = new Child;

	$parent->goodbye();
	echo "<br>";
	/*$parent->kill();
	echo "<br>";*/
	$parent->print();
	//$child->print();

?>