<?php

require_once '../utils/Crud.php';

class AuthManager {
    public function login($username, $password) {
        $crud = new Crud();
        $hashedPasswordFromDB = $crud->getPasswordByUsername('user', $username);

        if ($hashedPasswordFromDB !== null && password_verify($password, $hashedPasswordFromDB)) {
            // Authentification réussie
            return array('success' => true, 'message' => 'Authentification réussie');
            // Vous pouvez ajouter d'autres actions ici après une connexion réussie
        } else {
            // Mauvaises informations d'identification
            return array('success' => false, 'message' => 'Nom d\'utilisateur ou mot de passe incorrect');
        }
    }
}
?>
