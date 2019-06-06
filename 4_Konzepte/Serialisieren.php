<?php


$teilnehmer = array("Jan","Peter","Thorsten");

// serialize => serialisieren

var_dump($teilnehmer);
echo "<br>";
echo serialize($teilnehmer);
echo "<br>";

$neueListe = unserialize("a:3:{i:0;s:3:\"Jan\";i:1;s:5:\"Peter\";i:2;s:8:\"Thorsten\";}");
echo $neueListe[2];
echo "<br>";

class Serialisieren {
	private $name = "codingtutor.de";
	private $login = "teslogin";
}

$serialObject = new Serialisieren();
echo serialize($serialObject);