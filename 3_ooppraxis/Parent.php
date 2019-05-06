<?php


class Auto {

	public $geschwindigkeit = 0;

	public function beschleunigen($kmh) {
		//
		// beschleunigen:
		// - gaspedal drücke
		// - benzin gepumt
		// - vergaser muss arbeiten
		// - gas verbrennen
		$this->geschwindigkeit += $kmh;
	}

}

class Rennauto extends Auto {

	public function turboAnschalten() {
		$this->geschwindigkeit += 10;
	}

	public function beschleunigen($kmh) {
		parent::beschleunigen($kmh);

		$this->turboAnschalten();
	}
}

$normalesAuto = new Auto();
$normalesAuto->beschleunigen(6);
echo "Normal: " . $normalesAuto->geschwindigkeit ."<br>";

$rennAuto = new Rennauto();
$rennAuto->beschleunigen(6);
echo "Renn: " .$rennAuto->geschwindigkeit . "<br>";