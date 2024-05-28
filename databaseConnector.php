<?php
$USER = "root";
$PASSWORD = "";
$DATABASE = "mglsi_news";
$SERVER = "localhost";

$conn = new mysqli($SERVER, $USER, $PASSWORD, $DATABASE);
mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
	die("" . $conn->connect_error);
}

?>