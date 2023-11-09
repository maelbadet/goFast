<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            <?php foreach ($liens as $lien) {
                $url = $root_url . $lien['url'];
                $name = $lien['name'];
                echo '<li class="nav-item"><a class="nav-link" href="' . $url . '">' . $name . '</a></li>';
            } ?>
        </ul>
    </div>
</nav>