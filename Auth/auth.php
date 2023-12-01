<?php
// Inclusion de la classe CRUD existante
require_once '../utils/Crud.php';

// Vérifier si les données POST ont été envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si les champs 'username' et 'pwd' de 'user' ont été envoyés
    if (isset($_POST['username']) && isset($_POST['pwd'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];

        // Créer une instance de la classe CRUD
        $crud = new Crud();

        // Rechercher l'utilisateur dans la base de données par son nom d'utilisateur
        $userData = $crud->getByUsername('user', $username);

        if ($userData) {
            // L'utilisateur existe, vérifier le mot de passe
            $hashedPasswordFromDB = $userData[0]['pwd'];

            // Vérifier le mot de passe fourni avec celui de la base de données
            if (password_verify($password, $hashedPasswordFromDB)) {
                // Authentification réussie
                echo json_encode(array('success' => true, 'message' => 'Authentification réussie'));
            } else {
                // Mauvais mot de passe
                echo json_encode(array('success' => false, 'message' => 'Mot de passe incorrect'));
            }
        } else {
            // L'utilisateur n'existe pas
            echo json_encode(array('success' => false, 'message' => 'Utilisateur inexistant'));
        }
    } else {
        // Paramètres manquants
        echo json_encode(array('success' => false, 'message' => 'Paramètres manquants'));
    }
} else {
    // Méthode HTTP incorrecte
    echo json_encode(array('success' => false, 'message' => 'Méthode HTTP incorrecte'));
}
