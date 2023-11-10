<?php include_once('../../front/partials/header.php'); ?>
<?php require_once('../../back/SQLRequest/listing.php'); ?>

<h1>Suppression d'un lien</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../../back/SQLRequest/deleteLink.php" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="lien_a_supprimer" class="form-label">Sélectionnez le lien à supprimer :</label>
                    <select name="lien_a_supprimer" id="lien_a_supprimer" class="form-select">
                        <?php echo implode("\n", $options); ?>
                    </select>
                </div>
                <input type="submit" name="submit" value="Supprimer" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
