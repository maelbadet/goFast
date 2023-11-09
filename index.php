<?php
session_start();
if($_SESSION['id']==''){
    header("Location: front/vue/login.php");
}
else{
    header("Location: front/vue/mainPage.php");
}
?>