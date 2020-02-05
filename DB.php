<?php
/**
 * this is a class that connect you with the SQL Database i called it "DB"
 */
class DB
{
	public $conn;
	public function __construct()
	{
		$this->conn = new mysqli ("localhost", "root", "", "ICA");
	}
}

?>