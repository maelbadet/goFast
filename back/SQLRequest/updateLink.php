<?php
include_once('../../front/partials/header.php');
session_start();
$_SESSION['id'] = 1;

require_once('../../back/SQLRequest/listing.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['updated_link'])) {
    try {
        $lien_a_modifier = $_POST['lien_a_modifier'];
        $updatedLink = $_POST['updated_link'];
        $shortLink = generateRandomShortLink();

        $database = new mysqli("localhost", "root", "", "gofast");
        if ($database->connect_error) {
            throw new Exception("Connection failed: " . $database->connect_error);
        }

        $query = $database->prepare("UPDATE url SET link = ?, link_rewrite = ? WHERE id = ?");
        if (!$query) {
            throw new Exception("Prepare failed: (" . $database->errno . ") " . $database->error);
        }

        $query->bind_param('ssi', $updatedLink, $shortLink, $lien_a_modifier);

        if ($query->execute()) {
            echo "Le lien a été mis à jour avec succès.<br>";
            echo "Nouveau Lien d'origine : <a href=\"$updatedLink\" target=\"_blank\">$updatedLink</a><br>";
            echo "Nouveau Lien raccourci : <a href=\"..\processing\\redirect.php?short=$shortLink\" target=\"_blank\">$shortLink</a>";
        } else {
            throw new Exception("Erreur lors de la mise à jour du lien : " . $database->error);
        }

        $query->close();
        $database->close();
    } catch (Exception $e) {
        echo 'Exception capturée : ',  $e->getMessage(), "\n";
    }
}

function generateRandomShortLink() {
    $length = 7;
    $bytes = random_bytes($length);
    return bin2hex($bytes);
}
?>
