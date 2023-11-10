<?php

session_start();

$database = new mysqli("localhost", "root", "", "gofast");

unset($_SESSION['id']);

header("Location:../../front/vue/login.php");

?>