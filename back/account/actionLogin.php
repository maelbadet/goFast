<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailUser = $_POST['email'];
    $mdpUser = $_POST['psw'];

    $database = new mysqli("localhost", "root", "", "gofast");

    echo " email : " . $emailUser;
    echo "<br>";
    echo " password : " . $mdpUser;

    $query = "SELECT * FROM utilisateur WHERE email = '".$emailUser."' AND mot_de_passe = '".$mdpUser."'";
    $result = $database->query($query);
    if($result){       
        $id = $result->fetch_assoc()['id'];
        echo "<br>";
        echo "id is :" . $id;
    }
    else{
        printf("Error message: %s\n", $database->error);

    }
}

?>