<?php include_once('../../front/partials/header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
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
                        echo '<div class="alert alert-success" role="alert">';
                        echo "Lien d'origine : <a href=\"$originalLink\" target=\"_blank\">$originalLink</a><br>";
                        echo "Lien raccourci : <a href=\"redirect.php?short=$shortLink\" target=\"_blank\">$shortLink</a>";
                        echo '</div>';
                    } else {
                        // Gérer le cas où l'enregistrement en base de données échoue
                        echo '<div class="alert alert-danger" role="alert">';
                        echo "Erreur lors de l'enregistrement du lien.";
                        echo '</div>';
                    }
                } else {
                    // Gérer le cas où l'id de session n'est pas disponible
                    echo '<div class="alert alert-danger" role="alert">';
                    echo "Erreur : Identifiant de session non disponible.";
                    echo '</div>';
                }
            }
            ?>

            <form action="<?=$root_url?>back/processing/shorten.php" method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="original_link" class="form-label">Lien d'origine :</label>
                    <input type="text" name="original_link" id="original_link" class="form-control" placeholder="Entrez le lien à raccourcir" required>
                </div>
                <button type="submit" class="btn btn-primary">Raccourcir à nouveaux</button>
                <button class="btn btn-primary"><a href="../../index.php" class="text-white">Accueil</a></button>
            </form>
        </div>
    </div>
</div>

<?php function generateRandomShortLink() {
    $length = 7; // Longueur du raccourci
    $bytes = random_bytes($length);
    return bin2hex($bytes);
} ?>
