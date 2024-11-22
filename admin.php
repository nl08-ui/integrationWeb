<?php
include 'menu.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli("localhost", "username", "password", "tp_netflixx_nom_prenom");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $urlphoto = $_POST['urlphoto'];
    $urlvideo = $_POST['urlvideo'];

    
    $sql = "INSERT INTO film (title, description, urlphoto, urlvideo) VALUES ('$title', '$description', '$urlphoto', '$urlvideo')";
    if ($conn->query($sql) === TRUE) {
        
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

<h1>Ajouter un film</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="title">Titre:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description"></textarea><br>
    <label for="urlphoto">URL de la photo:</label><br>
    <input type="text" id="urlphoto" name="urlphoto"><br>
    <label for="urlvideo">URL de la vidéo:</label><br>
    <input type="text" id="urlvideo" name="urlvideo"><br><br>
    <input type="submit" value="Ajouter">
</form>
