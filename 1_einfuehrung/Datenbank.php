<?php


class Datenbank {
	const DBTYP = "MySQL";
	const DBVERSION = 5;

	public $istVerbunden = false;

	public $ergebnis = array("Peter", "Thomas", "Stefan");

	public $dbname = "Benutzer";
	public $dbuser = "dbuser01";
	public $dbpass = "dbpass01";
	public $dbhost = "127.0.0.1";

	public $statement;

	public function getTyp() {
		//return "Typ: " . $this->typ;
	}
}

$myDB = new Datenbank();
echo "Typ: " .Datenbank::DBTYP . "<br>";
echo "Version: ".Datenbank::DBVERSION. "<br>";

$myDB2 = new Datenbank();
$myDB2->dbuser = "Test" ;

echo $myDB2->dbuser ."<br>";
echo $myDB->dbuser. "<br>";