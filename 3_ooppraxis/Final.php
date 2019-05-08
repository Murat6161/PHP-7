<?php

class BaseProduct {

	final public function getVKPreis ($ek) {
		return $ek * 1.5;
	}
}

class FoodProduct extends BaseProduct {

	/*
	 * geth so nicht:
	 */
	//public function getVKPreis ($ek) {
	//
	//}
}

class NonFoodProduct extends BaseProduct {

	/*
	 * geth so nicht:
	 */
	//public function getVKPreis ($ek) {
	//
	//}
}