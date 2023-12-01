<?php
require_once './controllers/PageController.php';
$url = $_SERVER['REQUEST_URI'];


$urltrim = ltrim($url, '/ecom-2/projet2_Layssar/');
$explodeUrl = explode('/', $url);
//var_dump($explodeUrl[3]);
switch ($explodeUrl[3]) {

    case 'products':

        $page = new PageController;
        $page->products();

        break;

        // case 'product':
        //     $page = new PageController;
        //     $page->product($id);
        //     break;

    case 'product':

        var_dump($explodeUrl[4]);
        // Récupérer l'ID du produit à partir de la requête GET
        $productId = isset($explodeUrl[4]) ? $explodeUrl[4] : null;
        if ($productId) {
            $page = new PageController;
            $page->product($productId);
            // echo " je suis dans product";
        } else {
            echo "Product ID is missing.";
        }

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
        $page->products();
        break;
}
