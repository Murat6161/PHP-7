<?php

// Public:      öffentlich
// private:     nicht öffentlich / privat => nur in der gleichen Klasse
// protected:   nicht öffentlich => in gleicher Klasse + in abgeleiteter

class NeuesAuto {
	// max. 220
	// private $geschwindigkeit = 0;
	protected $geschwindigkeit = 0;

	public function getGeschwindigkeit() {
		return $this->geschwindigkeit;
	}

	public function setGeschwindigkeit($kmh) {
		if($kmh > 220){
			echo "Zu schnell: $kmh  <br> ";
			return;
		}

		$this->geschwindigkeit = $kmh;
	}

	private function isToFast($kmh) {
		$this->getKmhFromSettings();
		if($kmh > 220){
			return true;
		}

		return false;
	}

	private function getKmhFromSettings() {
		// KMH max. aus DB aufrufen...
		// Hier erstmal 220 statisch im normalfall würde es einen wert von der DB ausgeben.
		return 220;
	}
}

class NeuesRennauto extends NeuesAuto {
	public function warmStart() {
		// geht bei privat nicht: $this->isToFast(200);
		$this->geschwindigkeit = 50;
	}
}

$auto = new NeuesAuto();
$auto->setGeschwindigkeit(200);
echo $auto->getGeschwindigkeit() . "<br>";
$auto->setGeschwindigkeit(500);
echo $auto->getGeschwindigkeit() ."<br>";