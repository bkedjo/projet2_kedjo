<?php
// Inclure la classe CRUD existante
require_once '../utils/Crud.php';

// Vérifier si les données POST ont été envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si les champs 'username' et 'password' ont été envoyés
    if (isset($_POST['username']) && isset($_POST['pwd'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];

        // Créer une instance de la classe CRUD
        $crud = new Crud();

        // Récupérer le mot de passe haché de l'utilisateur à partir de la base de données
        $hashedPasswordFromDB = $crud->getPasswordByUsername('user', $username);

        if ($hashedPasswordFromDB !== null && password_verify($password, $hashedPasswordFromDB)) {
            // Authentification réussie
            echo json_encode(array('success' => true, 'message' => 'Authentification réussie'));
            // Vous pouvez ajouter d'autres actions ici après une connexion réussie
        } else {
            // Mauvaises informations d'identification
            echo json_encode(array('success' => false, 'message' => 'Nom d\'utilisateur ou mot de passe incorrect'));
        }
    } else {
        // Paramètres manquants
        echo json_encode(array('success' => false, 'message' => 'Paramètres manquants'));
    }
} else {
    // Méthode HTTP incorrecte
    echo json_encode(array('success' => false, 'message' => 'Méthode HTTP incorrecte'));
}
