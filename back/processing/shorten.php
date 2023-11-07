<?php

if (isset($_GET["short"])) {
    
    $shortLink = $_GET["short"];

    // Effectuez une recherche dans la base de données pour trouver le lien d'origine associé au raccourci
    // Remplacez les détails de la base de données par les vôtres
    $database = new mysqli("localhost", "root", "", "gofast");
    
    // Utilisation d'une requête préparée
    $query = "SELECT link FROM url WHERE link_rewrite = ?";
    $stmt = $database->prepare($query);
    
    if ($stmt) {
        // Lier la valeur du raccourci
        $stmt->bind_param("s", $shortLink);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($originalLink);
            $stmt->fetch();

            // Redirigez l'utilisateur vers le lien d'origine
            http_response_code(301);
            header("Location: $originalLink");
            exit;
        } else {
            // Gérer le cas où le raccourci est introuvable dans la base de données
            http_response_code(404);
            echo "Lien raccourci invalide.";
        }
        
        $stmt->close();
    } else {
        // Gérer l'erreur de préparation de la requête
        http_response_code(500);
        echo "Erreur de préparation de la requête.";
    }
}

?>
