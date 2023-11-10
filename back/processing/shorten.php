<?php
include_once('../../front/partials/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $originalLink = $_POST["original_link"];
    
    // Générer un raccourci aléatoire avec random_bytes
    $shortLink = generateRandomShortLink();
    
    // Récupérer l'id de la session
    $userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

    // Vérifier si l'id de la session est disponible
    if ($userId !== null) {
        // Vous pouvez enregistrer le lien d'origine, le raccourci et l'id de l'utilisateur dans la base de données
        // Remplacez les détails de la base de données par les vôtres
        $database = new mysqli("localhost", "root", "", "gofast");
        
        $query = "INSERT INTO url (link, link_rewrite, utilisateur_id) VALUES ('$originalLink', '$shortLink', '$userId')";
        $result = $database->query($query);

        if ($result) {
            // Afficher le résultat
            echo "Lien d'origine : <a href=\"$originalLink\" target=\"_blank\">$originalLink</a><br>";
            echo "Lien raccourci : <a href=\"redirect.php?short=$shortLink\" target=\"_blank\">$shortLink</a>";
        } else {
            // Gérer le cas où l'enregistrement en base de données échoue
            echo "Erreur lors de l'enregistrement du lien.";
        }
    } else {
        // Gérer le cas où l'id de session n'est pas disponible
        echo "Erreur : Identifiant de session non disponible.";
    }
}

function generateRandomShortLink() {
    $length = 7; // Longueur du raccourci
    $bytes = random_bytes($length);
    return bin2hex($bytes);
}
?>
