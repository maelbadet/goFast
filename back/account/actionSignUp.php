<?php
session_start();
$emailUser = $_POST['email'];
$mdpUser = $_POST['psw'];
$confirmMdpUser = $_POST['confirmPsw'];
$id = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $database = new mysqli("localhost", "root", "", "gofast");
    if ($mdpUser==$confirmMdpUser) {
        try{
            $query = "SELECT * FROM utilisateur WHERE email = '".$emailUser."'";
            $result = $database->query($query);
            foreach($result as $affiche){
                $id = $affiche['id'];
            }
            $query = "SELECT id FROM utilisateur WHERE email = ?";
            $stmt = $database->prepare($query);
            $stmt->bind_param("s", $emailUser);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();
        }catch(Exception $e){
            die('Erreur : ' . $e->getMessage() . " dans " . $e->getFile() . ":" . $e->getLine());
            header( "Location: ../../front/vue/signUp.php" );
            
        }
        if($id == 0){
            $mdpHash = password_hash($mdpUser, PASSWORD_DEFAULT );
            $query = "INSERT INTO utilisateur(email, mot_de_passe) VALUES('$emailUser','$mdpHash')";
            $result = $database->query($query);

            $idNouveauCompte = $mysqli->insert_id;
            $_SESSION['id']= $idNouveauCompte;
            header("Location: ../../front/vue/login.php");
        }
        else{
            header( "Location: ../../front/vue/signUp.php" );
        }
        
    } else {
        header( "Location: ../../front/vue/signUp.php" );
    }
}

?>