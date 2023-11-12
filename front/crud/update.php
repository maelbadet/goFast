<?php include_once('../../front/partials/header.php'); ?>
<?php require_once('../../back/SQLRequest/listing.php'); ?>

<h1>Modification d'un lien</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../form/update-form.php" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="lien_a_modifier" class="form-label">Sélectionnez le lien à modifier :</label>
                    <select name="lien_a_modifier" id="lien_a_modifier" class="form-select">
                        <?php echo implode("\n", $options); ?>
                    </select>
                </div>
                <input type="submit" name="submit_update" value="Modifier" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
