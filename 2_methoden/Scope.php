<?php

// Gültigkeitsbereiche der Klassen Methoden Eigenschaften usw.. , (nur class z.b. oder private..)

class Scope {

    public $durchschnittsAlter = 42;

    public function differenzBerechnen ($meinAlter) {
        $xyz = 5;
    }

}

$objekt = new Scope();

/*
function addieren() {
    $x = 5;
}
echo $x;
 */