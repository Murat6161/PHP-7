<?php

interface Fahrzeug {
	public function tanken($menge);
}

class Auto implements Fahrzeug {

	public function tanken($menge) {

		echo "Benzin eingefüllt<br>";
	}
}

class Flugzeug implements Fahrzeug {

	public function tanken($menge) {

		echo "Kerosin eingefüllt";
	}
}

class Tankstelle {
	public function auftanken (Fahrzeug $fahrzeug) {
		$fahrzeug->tanken(100);
	}
}

$auto = new Auto();
$flugzeug = new Flugzeug();
$tankstelle = new Tankstelle();

$tankstelle->auftanken($auto);
$tankstelle->auftanken($flugzeug);