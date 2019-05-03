<?php


class Rueckgabewerte {

	public function addieren($x, $y) {
		$summe = $x + $y;

		return $summe;
	}
}

$meinObject = new Rueckgabewerte();
$a = 5;
$b = 17;
$summe = $meinObject->addieren($a,$b);

echo "$a + $b = " . $summe ;