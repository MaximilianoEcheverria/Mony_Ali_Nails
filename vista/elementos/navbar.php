<header class="navbar navbar-dark sticky-top bg-purple  flex-md-nowrap p-0 shadow bg-opacity-75">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-purple text-start fs-4 fw-semibold" href="index.php">Mony Ali Nails</a>


  <div class="dropdown">
    <button class="dropdown-toggle border-0 bg-transparent text-white" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="icon ion-md-person lead mr-2"></i>
      <?php echo $_SESSION['user'] ?>
    </button>
    <ul class="dropdown-menu dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
      <a class="dropdown-item" href="index.php?u=editar">Mi perfil</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="index.php?u=salir">Cerrar sesión</a>
    </ul>
  </div>
</header>