<nav class="navbar navbar-expand sticky-top" style="background-color: #e3f2fd">
  <div class="container-lg">
    <a class="navbar-brand" href="."><i class="bi bi-palette-fill"></i> Dorawingo</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $hasil['username']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Setting</a></li>
            <li><a class="dropdown-item" href="login.php"><i class="bi bi-arrow-left-circle-fill"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>