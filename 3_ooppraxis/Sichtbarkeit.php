<?php

// Public: öffentlich
// private: nicht öffentlich / privat

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
}

class NeuesRennauto extends NeuesAuto {
	public function warmStart() {
		$this->geschwindigkeit = 50;
	}
}

$auto = new NeuesAuto();
$auto->setGeschwindigkeit(200);
echo $auto->getGeschwindigkeit() . "<br>";
$auto->setGeschwindigkeit(500);
echo $auto->getGeschwindigkeit() ."<br>";