<?php

class ValidationController
{
 
public function signup(array $userData)
    {// Validation du nom d'utilisateur
        $isValidUsername = strlen($userData['username']) >= 3;
        $msgUsername = $isValidUsername ? '' : 'Le nom d\'utilisateur doit contenir au moins 3 caractères';

        // Validation de l'e-mail
        $isValidEmail = filter_var($userData['email'], FILTER_VALIDATE_EMAIL);
        $msgEmail = $isValidEmail ? '' : 'E-mail invalide. Veuillez entrer une adresse e-mail valide.';

        // Validation du mot de passe
        $isValidPassword = strlen($userData['pwd']) >= 8;
        $msgPassword = $isValidPassword ? '' : 'Mot de passe invalide. Il doit contenir au moins 8 caractères.';

        return [
            'isValid' => $isValidUsername && $isValidEmail && $isValidPassword,
            'messages' => [
                'username' => $msgUsername,
                'email' => $msgEmail,
                'password' => $msgPassword,
            ],
        ];
    }

}

