<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Login</title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <!--Sweet alert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- animate css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Estilos login -->
  <link href="public/css/style.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="public/css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
    <form action="index.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="name@example.com" required>
        <label for="usuario">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required>
        <label for="clave">Contraseña</label>
      </div>
      <!--
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    -->
      <br>
      <input type="hidden" name="u" value="ingresar">
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn" value="Ingresar">Ingresar</button>
    </form>
    <br>
    
    <form action="index.php" method="POST" class="border-0 bg-transparent">
      <input type="hidden" name="u" value="nuevo">
      <button type="submit" class="border-0 text-decoration-none bg-transparent">
        <p class="mt-5 mb-3 text-muted">Crear nuevo usuario</p>
      </button>
    </form>
    <form action="index.php" method="POST" class="border-0 bg-transparent">
      <input type="hidden" name="u" value="recuperar">
      <button type="submit" class="border-0 text-decoration-none bg-transparent">
        <p class="mt-5 mb-3 text-muted">Olvidaste tu usuario o clave?</p>
      </button>
    </form>
  </main>

  <script src="public/js/alertas/boton-login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

  <?php
  if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
    echo "<script>
          logicaBotones($mensaje);
          </script>";
  }
  ?>
</body>

</html>