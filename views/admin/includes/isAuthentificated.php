<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_authenticated']) || $_SESSION['user_authenticated'] != true) {
    header('Location: login.php'); // Rediriger vers la page d'authentification si l'utilisateur n'est pas authentifié
    exit();
}
?>
