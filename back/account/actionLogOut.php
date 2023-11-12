<?php
session_start();
include('../../front/partials/header.php');

$database = new mysqli($database_host, $database_user, $database_password, $database_name);

unset($_SESSION['id']);

header("Location:../../front/vue/login.php");

?>