<?php

	class pessoa{

		//objeto pessoa

		private $nome = "Gabriel";
		private $idade = 23;
		private $peso = "60kg";

		public function crescer() {

			$this->comer();
			echo "Estou crescendo";

		}

		private function comer() {

			echo 'Estou comendo';

		}

	}

	$pessoa0 = new pessoa;

	$pessoa0->crescer();

?>