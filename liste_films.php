<?php
include 'menu.php';


$conn = new mysqli("localhost", "username", "password", "tp_netflixx_nom_prenom");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM film";
$result = $conn->query($sql);


echo "<h1>Tous les films</h1>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li><strong>" . $row['title'] . "</strong> par " . $row['author'] . ": <img src='" . $row['urlphoto'] . "' alt='" . $row['title'] . "'><a href='details.php?id=" . $row['id'] . "'>Consulter ce film</a></li>";
}
echo "</ul>";


$conn->close();
?>
