<?php





class PDO_Connect extends PDO{
	public function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "rek_db";
		try {
			parent::__construct("mysql:host=$servername;dbname=$dbname", $username, $password);
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}
}