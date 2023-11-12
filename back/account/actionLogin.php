<?php
session_start();
include('../../front/partials/header.php');
$emailUser = $_POST['email'];
$mdpUser = $_POST['psw'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $database = new mysqli($database_host, $database_user, $database_password, $database_name);

    try{
        $query = "SELECT id, mot_de_passe FROM utilisateur WHERE email = ?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $emailUser);
        $stmt->execute();
        $stmt->bind_result($id, $mdpBDD);
        $stmt->fetch();
        $stmt->close();
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage() . " dans " . $e->getFile() . ":" . $e->getLine());
        header( "Location: ../../front/vue/login.php" );
        
    }
    if (password_verify($mdpUser, $mdpBDD)) {
        $_SESSION['id']= $id;
        header("Location: ../../front/vue/mainPage.php");
        
    } else {
        header( "Location: ../../front/vue/login.php" );
    }
}

?>