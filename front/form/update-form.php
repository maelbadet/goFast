<?php
// update-form.php

include_once('../../front/partials/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_update'])) {
    $lien_a_modifier = $_POST['lien_a_modifier'];

    // Récupérer l'URL correspondant à l'ID
    $database = new mysqli("localhost", "root", "", "gofast");
    $query = $database->prepare("SELECT link FROM url WHERE id = ?");
    $query->bind_param('i', $lien_a_modifier);
    $query->execute();
    $query->bind_result($ancienLink);
    $query->fetch();
    $query->close();
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="../../back/SQLRequest/updateLink.php" method="post" class="mb-3">
                    <input type="hidden" name="lien_a_modifier" value="<?= $lien_a_modifier ?>">
                    <p class="mb-3">Ancien URL : <?= $ancienLink ?></p>
                    <div class="mb-3">
                        <label for="updated_link" class="form-label"><b>Nouvel URL :</b></label>
                        <input type="text" placeholder="URL" name="updated_link" id="updated_link" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier le lien</button>
                </form>
            </div>
        </div>
    </div>

    <?php
}

include_once('../../front/partials/footer.php');
?>
