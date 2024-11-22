<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motDePasseAttendu = "kangourou";
    $motDePasseFourni = $_POST["mot_de_passe"];

    if ($motDePasseFourni == $motDePasseAttendu) {
        echo "<h2>Le code d'accès au serveur central de la NASA:</h2>";
        echo "<p>XhgXiu</p>"; 
    } else {
        echo "<p>Mot de passe incorrect. Accès refusé.</p>";
    }
} 
?>
