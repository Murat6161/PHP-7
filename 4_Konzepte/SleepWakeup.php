<?php


class DB {
	private $login = "username";
	private $pass  = "geheim";
	private $istVerbunden = false;

	public function __construct($login,$pass) {

		$this->login = $login;
		$this->pass  = $pass;
		$this->verbinden();
	}

	public function verbinden() {
		$this->istVerbunden = true;
	}

	// serialize
	public function __sleep() {

		echo "sleeping..<br>";
		return array("login","pass");
	}

	public function __wakeup() {

		echo "aufstehen..<br>";
		$this->verbinden();
	}

	public function istDBVerbunden() {
		if($this->istVerbunden){
			echo "verbunden";
		}else{
			echo "nicht verbunden";
		}
	}

}

$db = new DB("user","geheim");
echo $db->istDBVerbunden();
echo "<br>";

$out = serialize($db);
$clonedObject = unserialize($out);
var_dump($clonedObject);
echo "<br>";
echo $clonedObject->istDBVerbunden();