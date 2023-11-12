<?php 

// le $root_url est a changer par l'url root dans votre navigateur (de http:// jusqu'à goFast/)
$root_url = "http://localhost/LiveCampus/php/cours_php_2/goFast/";

session_start();
$_SESSION['id']= 1;

$lienCrud = [
    ["name" => "Créer", "url" => "front/crud/create.php"],
    ["name" => "Lire", "url" => "front/crud/read.php"],
    ["name" => "Mettre à jour", "url" => "front/crud/update.php"],
    ["name" => "Supprimer", "url" => "front/crud/delete.php"],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>GoFast</title>
</head>
<body>

<header>
    <?php require_once('nav.php'); ?>
</header>
