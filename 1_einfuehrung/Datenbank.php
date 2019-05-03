<?php
/**
 * Created by PhpStorm.
 * User: m.yavuz
 * Date: 03.05.2019
 * Time: 08:28
 */

class Datenbank {
	public $typ = "MySQL";

	public function getTyp() {
		return "Typ: " . $this->typ;
	}
}

$myDB = new Datenbank();
echo $myDB->typ;
echo "<br>";
echo $myDB->getTyp();