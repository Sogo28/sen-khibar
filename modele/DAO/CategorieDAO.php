<?php
require_once 'DatabaseConnector.php';
class CategorieDAO
{
  public function getAll()
  {
    $connector = new DatabaseConnector();
    $conn = $connector->getConn();
    $query = "SELECT * FROM categorie";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
?>