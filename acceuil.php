<?php
session_start();

if(isset($_POST['username']) && $_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
    $_SESSION['loggedin'] = true;
    header('Location: page-privee1.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h2>Authentification</h2>
    <form method="post">
        <label>Nom d'utilisateur:</label><br>
        <input type="text" name="username" required><br>
        <label>Mot de passe:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>

   