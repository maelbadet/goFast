<?php include_once('../../front/partials/header.php'); ?>

<?php require_once('../../back/SQLRequest/listing.php'); ?>
<h1> Suppression d'un lien</h1>

<form action="../../back/SQLRequest/deleteLink.php" method="post">
    <select name="lien_a_supprimer">
        <?php echo implode("\n", $options); ?>
    </select>
    <input type="submit" name="submit" value="Supprimer">
</form>