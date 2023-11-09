<?php
session_start();
echo "id de session : " . $_SESSION['id'];

if($_SESSION['id']==''){
    header("Location: front/vue/login.php");
}
else{
    header("Location: front/vue/mainPage.php");
}
?>