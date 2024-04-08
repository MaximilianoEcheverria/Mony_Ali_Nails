<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Styles -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- Boostrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
  <!--Animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- Bootstrap core CSS -->
  <link href=" public/css/bootstrap.min.css" rel="stylesheet">

  <!--Sweet alert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- animate css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link href="public/css/dashboard.css" rel="stylesheet">

  <script src="public\js\alertas\boton-editar-usuario.js"></script>

  <title>Dashboard - Mony Ali Nails</title>
</head>

<body>
  <!-- Navbar -->
  <?php require('vista/elementos/navbar.php') ?>
  <!-- Fin Navbar -->
  <div class="container-fluid animate__animated animate__fadeIn">
    <div class="row">
      <!-- Sidebar -->
      <?php require('vista/elementos/sidebar.php') ?>
      <!-- Fin Sidebar -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive">
          <table class="table table-striped table-sm table-hover">
            <h3 class="card-header">
              <p class="text-dark">Turnos Clientes</p>
              </h5>
              <thead>
                <tr>
                  <th scope="col">ID</td>
                  <th scope="col">Cliente</td>
                  <th scope="col">Servicio</td>
                  <th scope="col">Fecha</td>
                  <th scope="col">Ver</td>
                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($dato)) :
                  foreach ($dato as $key => $value)
                    foreach ($value as $v) : ?>
                    <tr>
                      <td><?php echo $v['id_turno'] ?> </td>
                      <td><?php echo $v['id_cliente'] ?> </td>
                      <td><?php echo $v['id_servicio'] ?> </td>
                      <td><?php echo $v['fecha_turno'] ?> </td>
                      <td>

                        <div class="btn-group btn-group" role="group" aria-label="">
                          <a class="" href="index.php?t=mostrar&id_cliente=<?php echo $v['id_cliente'] ?>">
                            <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="custom-tooltip" title="Ver turno">
                              <i class="icon ion-md-eye"></i>
                            </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else : ?>
                  <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                  </tr>
                <?php endif ?>
              </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <script src="public/js/popper.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public\js\alertas\botones-eliminar.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="public/js/tooltip.js"></script>

</body>

</html>