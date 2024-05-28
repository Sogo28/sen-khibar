<?php
class DatabaseConnector
{
	private $USER = "root";
	private $PASSWORD = "";
	private $DATABASE = "mglsi_news";
	private $SERVER = "localhost";



	public function getConn()
	{
		$conn = new mysqli($this->SERVER, $this->USER, $this->PASSWORD, $this->DATABASE);
		if ($conn->connect_error) {
			die("" . $conn->connect_error);
		} else {
			return $conn;
		}
	}

}
?>