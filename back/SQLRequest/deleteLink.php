<?php include_once('../../front/partials/header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            if (isset($_POST['submit'])) {
                $userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

                if ($userId !== null) {
                    $database = new mysqli("localhost", "root", "", "gofast");

                    $lien_a_supprimer = $_POST['lien_a_supprimer'];

                    $query = $database->prepare("DELETE FROM url WHERE id = ? AND utilisateur_id = ?");
                    $query->bind_param('ii', $lien_a_supprimer, $userId);

                    if ($query->execute()) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            Le lien a été supprimé avec succès.
                        </div>
                        <button class="btn btn-primary"><a href="../../index.php" class="text-white">Accueil</a></button>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Erreur lors de la suppression du lien : <?= $database->error ?>
                        </div>
                        <?php
                    }

                    $query->close();
                    $database->close();
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Erreur : Identifiant de session non disponible.
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include_once('../../front/partials/footer.php'); ?>
