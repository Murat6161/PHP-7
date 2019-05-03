<?php


class VariableMethoden {

	public function addieren ($x, $y) {
		return $x + $y;
	}

	public function subtrahieren ($x, $y) {
		return $x - $y;
	}

}

$objekt = new VariableMethoden();

$rechenart = "subtrahieren";
echo $objekt->$rechenart(5,10);