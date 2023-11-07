<?php 
// le $root_url est a changer par l'url root dans votre navigateur (celui qui s'arrete au nom du projet)
$root_url = "http://localhost/LiveCampus/php/cours_php_2/goFast/";
$lien = "front/vue/mainPage.php";
$lienIndex = $root_url . 'index.php';
$liens = ["front/vue/mainPage.php", "index.php", "#"]
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