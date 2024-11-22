<?php
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: accueil.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Privée</title>
</head>
<body>
    <h2>Page Privée</h2>
    <p>Ceci est une page privée.</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>
