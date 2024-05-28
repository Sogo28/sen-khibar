<?php
require_once 'DatabaseConnector.php';
class ArticleDAO
{

  public function getAll()
  {
    $connector = new DatabaseConnector();
    $conn = $connector->getConn();
    $query = "SELECT * FROM article";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function getByCategorieId($id)
  {
    $connector = new DatabaseConnector();
    $conn = $connector->getConn();
    $query = "SELECT * FROM article WHERE categorie=" . $id;
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function getById($id)
  {
    $connector = new DatabaseConnector();
    $conn = $connector->getConn();
    $query = "SELECT * from article WHERE id=" . $id;
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
?>