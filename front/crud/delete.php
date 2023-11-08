<?php include_once('../../front/partials/header.php'); ?>

<?php require_once('../../back/listing/listing.php'); ?>
<p>
    Il faut ici avoir la possibilité de pouvoir supprimer un lien
</p>
je doit utilisé mon listing.php pour metre dans un bouton déroullant les différents liens déja générer et au clique sur un bouton supprimer,
ajouter une popup pour la double vérification de suppression puis si le bouton est validé, on supprime le liens qu'on a préalablement générer.
</br></br></br></br>

<form action="../../back/SQLRequest/deleteLink.php" method="post">
    <select name="lien_a_supprimer">
        <?php echo implode("\n", $options); ?>
    </select>
    <input type="submit" name="submit" value="Supprimer">
</form>