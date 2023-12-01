<?php
require_once './controllers/PageController.php';
$url = $_SERVER['REQUEST_URI'];
//echo 'REQUEST_URI : ' . $_SERVER['REQUEST_URI'];

$urltrim = ltrim($url, '/ecom-2/projet2_Layssar/');
$explodeUrl = explode('/', $url);
//var_dump($explodeUrl[3]);
switch ($explodeUrl[3]) {
    case 'products':
        $page = new PageController;
        $page->products();

        break;
   
    case 'cart':
        $page = new PageController;
        $page->cart();
        break;
    case 'signup':
        $page = new PageController;
        $page->signup();
        break;

    case 'login':
        $page = new PageController;
        $page->login();
        // ou PageController::login
     break;

    case 'users':
        $page = new PageController;
        $page->users();

    case 'user':
        $page = new PageController;
        $page->users();

    default:
        $page = new PageController;
        $page->acceuil();
        break;
}
