<?php


//Dateiname.php = Klasse Dateiname
class Konventionen {
	//Kostante immer in Großbuchstaben
	const TEST = "test";

	//Variablenname immer kleiner buchstabe zu beginn
	public $name = "";

	//  Methode:
	//  1. erster Buchstabe klein
	//  2. start des namens = verb
	//  3. camel case verwenden

	public function getName() {

	}
}

$konvetionenKleinhalten = new Konventionen();
