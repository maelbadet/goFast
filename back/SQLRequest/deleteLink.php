<?php
include_once('../../front/partials/header.php');

if (isset($_POST['submit'])) {
    $database = new mysqli("localhost", "root", "", "gofast");
    
    $lien_a_supprimer = $_POST['lien_a_supprimer'];
    
    $query = $database->prepare("DELETE FROM url WHERE id = ?");
    $query->bind_param('i', $lien_a_supprimer);
    
    if ($query->execute()) {
        echo "Le lien a été supprimé avec succès.";
        ?><button><a href="../../index.php"> Acceuil</a></button><?php
    } else {
        echo "Erreur lors de la suppression du lien : " . $database->error;
    }
    
    $database->close();
}
?>
