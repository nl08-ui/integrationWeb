
<?php

$conn = new mysqli("localhost", "username", "password", "tp_netflixx_lebrand_noemie");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM film ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);


echo "<h1>Bienvenue sur notre plateforme de streaming</h1>";
echo "<h2>Derniers films ajoutés :</h2>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li><strong>" . strtoupper($row['title']) . "</strong>: <img src='" . $row['urlphoto'] . "' alt='" . $row['title'] . "'></li>";
}
echo "</ul>";


$conn->close();
?>