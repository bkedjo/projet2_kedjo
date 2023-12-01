<?php
require_once 'ProductController.php';
require_once 'userController.php';
require_once 'ValidationController.php';

class PageController
{
    //recuperer les donnees
    public function products()
    {
        //Va me chercher mes produits 
        $objProductController = new ProductController;

        $products = $objProductController->getAllProducts();

        global $pageData;

        $pageData = [
            'products' => $products
        ];
        // boucle a travers mon tableau de produits
        // fait moi un liste avec mes produits
        require('./views/pages/products.php');
    }

    public function product($productId)
    {


        $objProductController = new ProductController;
        $product = $objProductController->getProductById($productId);

        global $pageData;
        $pageData =
            ['product' => $product];
        require('./views/pages/product.php');





        //       if(isset($_POST['addCart'])){
        //        $quantite = $_POST['qtty'];
        //        if($quantite > 0){
        //             addCart($id,$qtty);
        //         }



        // }


    }





    public function cart()
    {
        echo '<h1>Page cart</h1>';
    }





    public function users()
    {

        //Va me chercher mes users 
        $objUserController = new UserController;


        $users = $objUserController->getAllUsers();

        global $pageData;
        $pageData = [
            'users' => $users,
        ];
        // boucle a travers mon tableau de user
        // fait moi une liste avec mes produits



        require_once './views/admin/users.php';
    }


    public function user()
    {

        if (isset($_GET['id'])) {
            // $productId = $_GET['id'];
            // $objProductController = new ProductController;
            // $product = $objProductController->getProductById($productId); 



            //Va me chercher mes users 
            $objUserController = new UserController;
            $userDel = $objUserController->DeleteUserById();
            global $pageData;
            $pageData = ['user' =>  $userDel];
        }
        require_once './views/admin/users.php';
    }




    public function signup()
    {
        if (isset($_POST['envoyer'])) {
            // Récupération des éléments du formulaire
            $email = $_POST['email'];
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd = $_POST['pwd'];

            // Création d'un tableau avec les données de l'utilisateur
            $userData = [
                'email' => $email,
                'username' => $username,
                'fname' => $fname,
                'lname' => $lname,
                'pwd' => $pwd,
            ];

            // Validation des données avec ValidationController
            $validationController = new ValidationController;
            $validationResult = $validationController->signup($userData);

            if ($validationResult['isValid']) {
                // Les données sont valides, procéder à l'inscription
                $objUserController = new UserController;
                $objUserController->ajouterUser($userData);

                // Rediriger vers la page de connexion
                require_once './views/pages/login.php';
            } else {
                // Les données ne sont pas valides, afficher les messages d'erreur
                $errorMessages = $validationResult['messages'];

                // Rediriger vers la page d'inscription avec les messages d'erreur
                require_once './views/pages/signup.php';
            }
        } else {

            // Le formulaire n'a pas été soumis, afficher la page d'inscription
            require_once './views/pages/signup.php';
        }
    }





    public function login()
    {
        require_once './views/pages/login.php';
    }
}
