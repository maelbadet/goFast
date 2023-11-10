<?php include_once('../../front/partials/header.php'); ?>

<?php

    $database = new mysqli("localhost", "root", "", "gofast");
    $query = $database->query("SELECT * FROM url WHERE utilisateur_id = 1"); //remplacer utilisateur_id = 1 par utilisateur courant

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
    $database->close();


?>

<center>
<h1>
    Différent(s) lien(s)
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
            <td><a href=\"<?= $row['link'] ?>\" target=\"_blank\"> <?= $row['link'] ?></a></td>
            <td><a <a href=\"redirect.php?short=<?= $row['link_rewrite'] ?>\" target=\"_blank\"><?= $row['link_rewrite'] ?></a></td>
            <td><?= $row['click'] ?></td>
        </tr>
        <?php endforeach; 
    ?>
    </tbody>
</table>