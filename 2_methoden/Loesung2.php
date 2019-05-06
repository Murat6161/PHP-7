<?php


/*

Die neue Lösung soll jeden Verleih erfassen:

- Uhrzeit
- Bootsnummer
- Name der Person

Schaffe ein oder mehrere geeignete(n) Klasse(n), über
die dies abgebildet werden kann. Die Speicherung der Daten ist nicht
notwendig. Es kann auch mit Dummywerten gearbeitet werden.

*/

class Bootsverleih {
    const STUNDENSATZ = 4;

    public $ausleihe = array();

    public function bootLeihen($name, $bootNummer) {
        echo "Verleih:<br>";

        $uhrzeit = date("H:m");

        $this->ausleihe[$bootNummer] = array("name" => $name, "start" => $uhrzeit);
        printf("- Boot #%d eingebucht um %s Uhr<br>", $bootNummer, $uhrzeit);
    }

    public function bootAbgeben($bootNummer) {
        $ausleihe = $this->ausleihe[$bootNummer];
        $this->ausleihe[$bootNummer] = null;

        // Dauer berechnen... $ausleihe["start"]
        $dauer = 2;
        $kosten = $dauer * self::STUNDENSATZ;

        echo "Rückgabe:<br>";
        echo "- Dauer: $dauer Stunden<br>";
        echo "- Kosten: $kosten EUR <br>";
        print_r(ausleihe);
    }
}

$verleih = new Bootsverleih();
$verleih->bootLeihen("Max", 61);
$verleih->bootAbgeben(61);