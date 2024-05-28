<?php
require_once "modele/DAO/ArticleDAO.php";
require_once "modele/DAO/CategorieDAO.php";
class Controller
{
  public function showAccueil()
  {

    $articleDAO = new ArticleDAO();
    $categorieDAO = new CategorieDAO();
    $articles = $articleDAO->getAll();
    $categories = $categorieDAO->getAll();
    require_once 'vue/accueil.php';
  }

  public function showCategorie($id)
  {
    $articleDAO = new ArticleDAO();
    $categorieDAO = new CategorieDAO();
    $articles = $articleDAO->getByCategorieId($id);
    $categories = $categorieDAO->getAll();
    require_once 'vue/articlesByCategorie.php';
  }

  public function showErrorPage()
  {
    require_once '../vue/error.php';
  }

  public function showArticle($id)
  {
    // a implementer
    echo "hahah ";
  }
}

?>