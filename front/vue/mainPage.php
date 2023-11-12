
<style>
    .crud{
        height: 80vh;
    }
</style>
<?php 
include_once('../partials/header.php'); 
$url_crud = $root_url ."front/crud/";
$create = $url_crud . "create.php";
$read = $url_crud . "read.php";
$update = $url_crud . "update.php";
$delete = $url_crud . "delete.php";
?>
<div class="container mt-5 crud">
    <h1>Votre CRUD : Create / Read / Update / Delete</h1>
    <div class="dropdown d-flex justify-content-center">
        <span class="btn btn-secondary dropdown-toggle" role="button" id="crudOptions" data-bs-toggle="dropdown" aria-expanded="false">
            Options CRUD
        </span>
        <ul class="dropdown-menu" aria-labelledby="crudOptions">
            <li><a class="dropdown-item" href="<?= $create ?>">Créer</a></li>
            <li><a class="dropdown-item" href="<?= $read ?>">Lire</a></li>
            <li><a class="dropdown-item" href="<?= $update ?>">Mettre à jour</a></li>
            <li><a class="dropdown-item" href="<?= $delete ?>">Supprimer/désactiver</a></li>
        </ul>
    </div>
</div>

<?php include('../partials/footer.php') ?>