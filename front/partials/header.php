<?php 
// le $root_url est a changer par l'url root dans votre navigateur (celui qui s'arrete au nom du projet)
$root_url = "http://localhost/LiveCampus/php/cours_php_2/goFast/";
$lien = "front/vue/mainPage.php";
$liens = [
    ["name" => "crud", "url" => "front/vue/mainPage.php"],
    ["name" => "Accueil", "url" => "index.php"],
    ["name" => "Autre Lien", "url" => "#"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>GoFast</title>
</head>
<body>

<header>
    <?php require_once('nav.php'); ?>
</header>