<?php include_once('../../front/partials/header.php'); ?>
<?php require_once('../../back/SQLRequest/listing.php'); ?>
<style>
    .crud{
        height: 75vh;
    }
</style>
<h1>Suppression d'un lien</h1>

<div class="container mt-5 crud">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../../back/SQLRequest/deleteLink.php" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="lien_a_supprimer" class="form-label">Sélectionnez le lien à traiter :</label>
                    <select name="lien_a_supprimer" id="lien_a_supprimer" class="form-select">
                        <?php echo implode("\n", $options); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" name="action" value="disable" class="btn btn-warning">
                    <input type="submit" name="action" value="delete" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('../partials/footer.php') ?>