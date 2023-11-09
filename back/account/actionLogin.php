<?php
session_start();
$emailUser = $_POST['email'];
$mdpUser = $_POST['psw'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $database = new mysqli("localhost", "root", "", "gofast");

    try{
        $query = "SELECT * FROM utilisateur WHERE email = '".$emailUser."'";
        $result = $database->query($query);
        foreach($result as $affiche){
            $id = $affiche['id'];
            $mdpBDD = $affiche['mot_de_passe'];
        }
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