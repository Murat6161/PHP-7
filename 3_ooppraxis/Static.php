<?php


class Formatter {

	const FORMAT = "Name: %s, %s";

	public static function namensFormatierung($vorname, $nachname) {
		return sprintf(self::FORMAT, $vorname,$nachname);
	}
}

/*
$className = "Formatter";
echo $className::namensFormatierung("Jan","Brinkman");
 */

echo Formatter::namensFormatierung("Jan", "Brinkman");