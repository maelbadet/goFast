<?php
include_once('../../front/partials/header.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $originalLink = $_POST["original_link"];
    
    // Générer un raccourci aléatoire avec random_bytes
    $shortLink = generateRandomShortLink();
    

    // Vous pouvez enregistrer le lien d'origine et le raccourci dans une base de données
    // Remplacez les détails de la base de données par les vôtres
    $database = new mysqli("localhost", "root", "", "gofast");
    
    $query = "INSERT INTO url (link, link_rewrite) VALUES ('$originalLink', '$shortLink')";
    $result = $database->query($query);

    if ($result) {
        // Afficher le résultat
        echo "Lien d'origine : <a href=\"$originalLink\" target=\"_blank\">$originalLink</a><br>";
        echo "Lien raccourci : <a href=\"redirect.php?short=$shortLink\" target=\"_blank\">$shortLink</a>";
    } else {
        // Gérer le cas où l'enregistrement en base de données échoue
        echo "Erreur lors de l'enregistrement du lien.";
    }
}

function generateRandomShortLink() {
    $length = 7; // Longueur du raccourci
    $bytes = random_bytes($length);
    return bin2hex($bytes);
}
?>
