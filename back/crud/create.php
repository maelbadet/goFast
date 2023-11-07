<?php include_once('../../front/partials/header.php'); 
$title = "créer un lien raccourcis"?>

<h1><?=$title?></h1>

<form action="../processing/shorten.php" method="POST">
    <label for="original_link">Lien d'origine :</label>
    <input type="text" name="original_link" id="original_link" placeholder="Entrez le lien à raccourcir" required>
    <button type="submit">Raccourcir</button>
</form>