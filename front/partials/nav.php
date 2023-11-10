<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= $root_url?>index.php">Acceuil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            CRUD
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
          <?php foreach ($lienCrud as $lien) {
                        $url = $root_url . $lien['url'];
                        $name = $lien['name'];
                        echo '<a class="dropdown-item" href="' . $url . '">' . $name . '</a>';
                    } ?>
          </ul>
        </li>
    </ul>
    <ul class="navbar-nav">
    <a class="navbar-brand" href="<?= $root_url?>front/vue/login.php">Disconnect</a>
    </ul>
    </div>
  </div>
</nav>