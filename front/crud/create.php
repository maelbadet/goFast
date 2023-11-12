<?php include_once('../../front/partials/header.php'); 
$title = "Créer un lien raccourci"?>
<h1><?=$title?></h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="<?=$root_url?>back/processing/shorten.php" method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="original_link" class="form-label">Lien d'origine :</label>
                    <input type="text" name="original_link" id="original_link" class="form-control" placeholder="Entrez le lien à raccourcir" required>
                </div>
                <button type="submit" class="btn btn-primary">Raccourcir</button>
            </form>
        </div>
    </div>
</div>
