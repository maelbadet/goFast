

<?php include_once('../partials/header.php'); 

$url_crud = $root_url ."back/crud/";
$create = $url_crud . "create.php";
$read = $url_crud . "read.php";
$update = $url_crud . "update.php";
$delete = $url_crud . "delete.php";
?>


<div class="dropdown">
        <span>Options CRUD</span>
        <div class="dropdown-content">
            <a href="<?= $create ?>">Créer</a>
            <a href="<?= $read ?>">Lire</a>
            <a href="<?= $update ?>">Mettre à jour</a>
            <a href="<?= $delete ?>">Supprimer</a>
        </div>
    </div>