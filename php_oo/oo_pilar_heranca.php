<?php

//aulas de php orientação orientada a objetos 
	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}
		function trocarMarcha(){
			echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
		}
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}
		function trocarMarcha(){
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
		}
	}
	class Caminhao extends Veiculo{

	}

	 $carro = new Carro('ABC1234', 'Branco');
	 $moto = new Moto('DEF1122', 'Preto');
	 $caminhao = new caminhao();

	$carro->trocarMarcha();
	echo '<br/>';
	$moto->trocarMarcha();
	echo '<br/>';
	$caminhao->trocarMarcha();
	// echo '<pre>';
	// print_r($carro);
	// echo '<br /><br />';
	// print_r($moto);
	// echo '</pre>';
	// echo '<hr />';

	// $carro->abrirTetoSolar();
	// echo '<br />';
	// $carro->acelerar();
	// echo '<br />';
	// $carro->freiar();

	// echo '<hr />';

	// $moto->empinar();
	// echo '<br />';
	// $moto->acelerar();
	// echo '<br />';
	// $moto->freiar();