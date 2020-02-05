<?php
/**
 * this is a class for the blog.
 * 
 */
include "db.php";
	class Blog extends DB
	{

// function to insert post to the database
		public function InsertPost($table, $fields)
		{
			$SQL = "";
			$SQL .= "INSERT INTO ".$table;
			$SQL .= " (".implode(",", array_keys($fields)).") VALUES ";
			$SQL .= "('".implode("','", array_values($fields))."')";
			$query = $this->conn->query($SQL);

			if ($query) {
				return true;
			}

		}
// function to fetch all the field of a table from the database, if $status matches
		public function FetchAllPost($table, $status)
		{
	        $SQL = "SELECT * FROM ". $table;
	        $SQL .= " WHERE status= '".$status."'";
			$array = array();
			$query = $this->conn->query($SQL);

			while ($row = mysqli_fetch_assoc($query)) {
				$array[] = $row;
			}
			return $array;

		}
	}

?>