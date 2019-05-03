<?php

class Methoden {

	function addieren($x, $y = 16) { // Als Parameter kann auch ein default Wert eingegeben werden.
		echo "$x + $y  = " . ($x+$y);
	}
}

$meinObject = new Methoden();
$meinObject->addieren(6,4);
echo "<br>";
$meinObject->addieren(6);   // Somit muss man dann auch nur ein Parameter eingeben
echo "<br>";
$meinObject->addieren(6 , 33);