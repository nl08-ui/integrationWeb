<?php
include 'menu.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli("localhost", "username", "password", "tp_netflixx_nom_prenom");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $login = $_POST['login'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM user WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: admin.php");
        exit();
    } else {
        $error = "Login ou mot de passe incorrect";
    }

    
    $conn->close();
}
?>

<h1>Connexion</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Se connecter">
</form>

<?php if (isset($error)) echo "<p>$error</p>"; ?>
