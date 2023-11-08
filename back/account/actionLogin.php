<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailUser = $_POST['email'];
    $mdpUser = $_POST['psw'];

    $database = new mysqli("localhost", "root", "", "gofast");

    echo " email : " . $emailUser;
    echo "<br>";
    echo " password : " . $mdpUser;

    $result = $database->query("SELECT * FROM utilisateur WHERE email = "$emailUser" AND mot_de_passe = " $mdpUser);
    $test = $result->fetch_assoc();
    $idUser = $result[0]['id'];

    echo 'id is ' . $idUser;
}

?>