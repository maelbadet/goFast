<?php include_once('../../front/partials/header.php'); ?>

<?php require_once('../../back/SQLRequest/listing.php'); ?>
<h1> Modification d'un lien</h1>

<form action="../form/update-form.php" method="post">
    <select name="lien_a_modifier">
        <?php echo implode("\n", $options); ?>
    </select>
    <input type="submit" name="submit_update" value="Modifier">
</form>
