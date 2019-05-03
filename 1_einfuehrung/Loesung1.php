<?php

/*
*   Name
*   Geburtsdatum
*   Dauer des Praktikums ( in Tagen )
*   Abteilung
*   Betreuende Person
*   Ansprechpartner in der Schule
*   Schule
 */

class Praktikum {

	public $name = "";
	public $geburtsdatum = "";
	public $dauerInTagen = 0;
	public $abteilung = "";
	public $betreuendePerson = "";
	public $anschprechpartnerSchule = "";
	public $nameSchule = "";

}

$praktikum = new Praktikum();
$praktikum->name = "Max";
$praktikum->geburtsdatum = "01.01.1950";
$praktikum->dauerInTagen = 12;
$praktikum->abteilung = "IT";
$praktikum->betreuendePerson = "Musterman";
$praktikum->anschprechpartnerSchule = "Herr Max";
$praktikum->nameSchule = "Musterschule";
