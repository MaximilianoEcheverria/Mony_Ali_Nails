<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Básico productos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Estilos -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/signin.css" rel="stylesheet">
    <link href="public/css/login.css" rel="stylesheet">

    <!--Sweet alert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="" id="form1">
            <h1 class="h3 mb-3 fw-normal">Registrar usuario</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="name@example.com"
                    required>
                <label for="usuario">Usuario</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                <label for="correo">Email</label>
            </div>
            <br>
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
            <input type="hidden" name="u" value="guardar">
            <button id="btnSubmit" class="w-100 btn btn-lg btn-success" type="submit" name="btn" value="Guardar">Registrar
                usuario</button>
            <a class="text-decoration-none" href="login.php">
                <p class="mt-5 mb-3 text-muted">Cancelar</p>
            </a>
        </form>
    </main>
    <script src="public/js/alertas/boton-registrar.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </div>
</body>

</html>