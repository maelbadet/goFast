<?php include_once('../../front/partials/header.php'); ?>
<?php require_once('../../back/SQLRequest/listing.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
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
                        ?>
                        <div class="alert alert-success" role="alert">
                            Le lien a été mis à jour avec succès.
                        </div>
                        <p>Nouveau Lien d'origine : <a href="<?= $updatedLink ?>" target="_blank"><?= $updatedLink ?></a></p>
                        <p>Nouveau Lien raccourci : <a href="../../back/processing/redirect.php?short=<?= $shortLink ?>" target="_blank"><?= $shortLink ?></a></p>
                        <button class="btn btn-primary"><a href="../../index.php" class="text-white">Accueil</a></button>

                        <?php
                    } else {
                        throw new Exception("Erreur lors de la mise à jour du lien : " . $database->error);
                    }

                    $query->close();
                    $database->close();
                } catch (Exception $e) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?= 'Exception capturée : ' . $e->getMessage() ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include_once('../../front/partials/footer.php'); ?>

<?php
function generateRandomShortLink()
{
    $length = 7;
    $bytes = random_bytes($length);
    return bin2hex($bytes);
}
?>
