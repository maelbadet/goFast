<?php include_once('../../front/partials/header.php'); ?>

<?php

    $database = new mysqli("localhost", "root", "", "gofast");
    $query = $database->query("SELECT * FROM url WHERE etat = 0"); //requete url valide
    $query_disable = $database->query("SELECT * FROM url WHERE etat = 1"); //requete url desactivé

    if ($query)
    {
        $data = array();
        while($row = $query->fetch_assoc())
        {
            $data[] = $row;
        }
    } else {
    echo "Erreur dans la requête SQL : " . $database->error;
    }


    if ($query_disable)
    {
        $data_disable = array();
        while($row_disable = $query_disable->fetch_assoc())
        {
            $data_disable[] = $row_disable;
        }
    } else {
    echo "Erreur dans la requête SQL : " . $database->error;
    }

    $database->close();
    
?>

</br>
<center>
<h1>
    Différent(s) lien(s) activé(s)
</h1>
</center>
</br>

<table class="table table-striped table-dark">
  <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Lien</th>
            <th scope="col">Lien raccourci</th>
            <th scope="col">Click</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($data as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><a href=<?= $row['link'] ?> target="_blank"> <?= $row['link'] ?></a></td>
            <td><a href="<?= $root_url ?>back\processing\redirect.php?short=<?= $row['link_rewrite'] ?>" target="_blank\"><?= $row['link_rewrite'] ?></a></td>
            <td><?= $row['click'] ?></td>
        </tr>
        <?php endforeach; 
    ?>
    </tbody>
</table>

</br>
<center>
<h1>
    Différent(s) lien(s) désactivé(s)
</h1>
</center>
</br>

<table class="table table-striped table-dark">
  <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Lien</th>
            <th scope="col">Lien raccourci</th>
            <th scope="col">Click</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($data_disable as $row_disable): ?>
        <tr>
            <td><?= $row_disable['id'] ?></td>
            <td><a href=<?= $row_disable['link'] ?> target="_blank"> <?= $row_disable['link'] ?></a></td>
            <td><a href="<?= $root_url ?>back\processing\redirect.php?short=<?= $row_disable['link_rewrite'] ?>" target="_blank\"><?= $row_disable['link_rewrite'] ?></a></td>
            <td><?= $row_disable['click'] ?></td>
        </tr>
        <?php endforeach; 
    ?>
    </tbody>
</table>