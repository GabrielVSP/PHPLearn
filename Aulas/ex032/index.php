<?php

	/*

	factory

	class Cachorro
	{

		public function __construct()
		{

			echo "Cachorro";

		}

	}

	class Gato
	{

		public function __construct()
		{

			echo "Gato";

		}

	}

	class Animal {

		public static function build($nomeClass)
		{

			return new $nomeClass;

		}

	}

	Animal::build('gato');*/

	class Carrinho {

		public function fecharCarrinho()
		{
			echo "Carrinho Fechado";

		}

	}

	class Frete {

		public function calcularFrete()
		{

			echo "Frete calculado";

		}

	}

	class Pedido {

		public function fecharPedido()
		{



		}

	}

	class Loja {

		public function finalizarCompra()
		{

			$this->fecharCarrinho();
			/*$this->calcularFrete();
			$this->fecharPedido();*/

			echo "Compra finalizada";

		}

		public function fecharCarrinho() {

			$carrinho = new Carrinho();
			$carrinho->fecharCarrinho();

		}

	}

	$loja = new Loja;
	$loja->finalizarCompra();


?>