<?php

class Mathematik {
	public $operation = "";

	public function addieren($x, $y) {
		return $x + $y ;
	}

	public  function subtrahieren($x, $y) {
		return $x - $y;
	}

	public function __invoke($x, $y) {

		if ($this->operation == "plus") {
			echo $this->addieren($x, $y);
		} elseif($this->operation == "minus") {
			echo $this->subtrahieren($x, $y);
		}
	}

}

$math = new Mathematik();
$math->operation = "plus";

$math(5,6);
