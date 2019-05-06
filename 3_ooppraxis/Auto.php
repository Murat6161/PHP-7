<?php

class Auto {

	public $marke;

	public function __construct($marke = "Unbekannt") {
		$this->marke = $marke;
	}

	public function getMarke() {
		return $this->marke;
	}

	public function __destruct() {
		echo "objekt zerstört <br>";
	}
}

$bmw = new Auto("BMW");
echo $bmw->getMarke(). "<br>";
$bmw = null;

$auto = new Auto();
echo $auto->getMarke() . "<br>";
