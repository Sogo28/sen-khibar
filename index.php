<?php
require_once 'controller/Controller.php';
$controller = new Controller();

if (!isset($_GET['action'])) {
	$controller->showAccueil();
} else {
	$action = $_GET['action'];
	switch ($action) {
		case 'article':
			isset($_GET['id']) ? $controller->showArticle($_GET['id']) : $controller->showErrorPage();
			break;
		case 'categorie':
			isset($_GET['id']) ? $controller->showCategorie($_GET['id']) : $controller->showErrorPage();
		default:
			break;
	}
}

?>