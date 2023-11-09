<?php 

$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

if ($userId !== null) {
    $database = new mysqli("localhost", "root", "", "gofast");

    $query = $database->query("SELECT id, link FROM url WHERE utilisateur_id = $userId");

    if ($query) {
        $options = array();

        while ($row = $query->fetch_assoc()) {
            $id = $row['id'];
            $link = $row['link'];
            $options[] = "<option value=\"$id\">$link</option>";
        }
    } else {
        echo "Erreur dans la requête SQL : " . $database->error;
    }

    $database->close(); 
} else {
    echo "Erreur : Identifiant de session non disponible.";
}
?>
