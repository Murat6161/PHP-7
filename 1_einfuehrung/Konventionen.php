<?php
/**
 * Created by PhpStorm.
 * User: m.yavuz
 * Date: 03.05.2019
 * Time: 11:08
 */

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
