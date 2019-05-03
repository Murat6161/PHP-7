<?php
/**
 * Created by PhpStorm.
 * User: m.yavuz
 * Date: 03.05.2019
 * Time: 11:15
 */

$name = "Jan";
$name2= $name;

$name2 = "Peter";
echo "name2: " .$name2 ."<br>";
echo "name: " .$name ."<br>";


class Referenzen{
	public $name;
}

$user1 = new Referenzen();
$user1->name = "jan";

$user2 = new Referenzen();
$user2->name = "Stefan";

$user3 = $user1;
$user3->name = "Kopie";

echo "user3: " . $user3->name . "<br>";
echo "user2: " . $user2->name . "<br>";
echo "user1: " . $user1->name . "<br>";
