<7php

$servername = "localhost";
$usernanme = "root";
$password = "root";
$basededonnee = "b1_base_donne";

$conn = new mysqli($servername, $username, $password, $basededonnee)

if ($conn->connect_error) {
    echo $conn->connect_error;
} else {
    echo "connexion reussis"
}

$sql = "SELECT * FROM utilisateur"
$result = $conn->query'($sql)

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo $row["id"]
    }
}