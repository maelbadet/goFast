<nav>
    <ul>
        <?php foreach ($liens as $lien) {
            $url = $root_url . $lien;
            echo '<li><a href="' . $url . '">Texte du lien</a></li>';
        } ?>
    </ul>
</nav>
