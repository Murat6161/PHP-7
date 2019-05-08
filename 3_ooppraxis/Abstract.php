<?php


abstract class DB {

	abstract function connect();

	public function userAuslesen() {
		return "SELECT * FROM users";
	}

	public function userAnlegen() {
		return "INSERT...";
	}

}

class MySQLDB extends DB {

	public function connect() {
		echo "Verbindung zu Port 3306";
	}
}

$db = new MySQLDB();