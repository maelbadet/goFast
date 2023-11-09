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

<p>
    Ici, il faut pouvoir lire les différents liens déja mis en places
</p>


<table>
    <thead>
        <tr>
            <th colspan="4">Différent(s) lien(s)</th>
        </tr>
        <tr>
            <td>Id</td>
            <td>Lien</td>
            <td>Lien raccourci</td>
            <td>Click</td>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($data as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['link'] ?></td>
            <td><?= $row['link_rewrite'] ?></td>
            <td><?= $row['click'] ?></td>
        </tr>
        <?php endforeach; 
    ?>
    </tbody>
</table>

<style>
    table, td {
        border: 1px solid #333;
    }

    thead,tfoot {
        background-color: #333;
        color: #fff;
    }
</style>
