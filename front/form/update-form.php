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

    <form action="../../back/SQLRequest/updateLink.php" method="post">
        <input type="hidden" name="lien_a_modifier" value="<?= $lien_a_modifier ?>">
        <p>Ancien URL : <?= $ancienLink ?></p>
        <label for="url"><b>Nouvel URL :</b></label>
        <input type="text" placeholder="URL" name="updated_link" required>
        <button type="submit">Modifier le lien</button>
    </form>

    <?php
}

include_once('../../front/partials/footer.php');
?>
