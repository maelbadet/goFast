
<style>
    .crud{
        margin-bottom: 60vh;
    }
</style>
<?php
include('../../front/partials/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'], $_POST['lien_a_supprimer'])) {
        $userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

        if ($userId !== null) {
            $database = new mysqli($database_host, $database_user, $database_password, $database_name);

            $lien_a_supprimer = $_POST['lien_a_supprimer'];
            $action = $_POST['action'];

            if ($action === 'disable') {
                $query = $database->prepare("UPDATE url SET etat = true WHERE id = ? AND utilisateur_id = ?");
            } elseif ($action === 'delete') {
                $query = $database->prepare("DELETE FROM url WHERE id = ? AND utilisateur_id = ?");
            }

            if (isset($query)) {
                $query->bind_param('ii', $lien_a_supprimer, $userId);

                if ($query->execute()) {
                    ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?php echo ($action === 'disable') ? "Le lien a été désactivé avec succès." : "Le lien a été supprimé avec succès."; ?>
                        <p class="alert alert-success mt-3" role="alert"> Vous pouvez voir vos liens désactiver dans 
                            <strong><a href="<?= $root_url ?>front/crud/read.php">Lire</a></strong></p>
                    </div>
                    <a href="../../index.php" class="btn btn-primary mt-3 crud">Accueil</a>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        Erreur lors de <?php echo ($action === 'disable') ? "la désactivation" : "la suppression"; ?> du lien : <?= $database->error ?>
                    </div>
                    <?php
                }

                $query->close();
            } else {
                ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Action non valide.
                </div>
                <?php
            }

            $database->close();
        } else {
            ?>
            <div class="alert alert-danger mt-3" role="alert">
                Erreur : Identifiant de session non disponible.
            </div>
            <?php
        }
    }
}
?>
<?php include('../../front/partials/footer.php') ?>