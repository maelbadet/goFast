<?php
include_once('../../front/partials/header.php');

if (isset($_POST['submit'])) {
    $userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

    if ($userId !== null) {
        $database = new mysqli("localhost", "root", "", "gofast");
        
        $lien_a_supprimer = $_POST['lien_a_supprimer'];
        
        $query = $database->prepare("DELETE FROM url WHERE id = ? AND utilisateur_id = ?");
        $query->bind_param('ii', $lien_a_supprimer, $userId);
        
        if ($query->execute()) {
            echo "Le lien a été supprimé avec succès.";
            ?><button><a href="../../index.php"> Accueil</a></button><?php
        } else {
            echo "Erreur lors de la suppression du lien : " . $database->error;
        }
        
        $database->close();
    } else {
        echo "Erreur : Identifiant de session non disponible.";
    }
}
?>
