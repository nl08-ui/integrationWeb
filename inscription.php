<?php
include 'menu.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli("localhost", "username", "password", "tp_netflixx_nom_prenom");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $login = $_POST['login'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO user (login, password) VALUES ('$login', '$password')";
    if ($conn->query($sql) === TRUE) {
        
        header("Location: connexion.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

<h1>Inscription</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="S'inscrire">
</form>
