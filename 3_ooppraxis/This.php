<?php

class This {

	const KEYPATH = "de.codingtutor.de";

	public $name;

	public function getName() {
		return $this->name;
	}

	public function keypath() {
		return self::KEYPATH;
	}

}

$objekt = new This();
$objekt->name = "Jan";
echo $objekt->getName() ."<br>";

echo This::class . "<br>";