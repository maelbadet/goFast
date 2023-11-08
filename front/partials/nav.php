<nav>
    <ul>
        <?php foreach ($liens as $lien) {
            $url = $root_url . $lien['url'];
            $name = $lien['name'];
            echo '<li><a href="' . $url . '">' . $name . '</a></li>';
        } ?>
    </ul>
</nav>