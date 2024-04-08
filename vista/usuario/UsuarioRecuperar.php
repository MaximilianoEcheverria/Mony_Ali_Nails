<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Básico productos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

<body>
    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="text-center">Recuperar usuario</h1>
                    </div>
                    <form class="p-4" method="get" action="">
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" id="correo" name="correo" class="form-control" required>
                            </br>
                            <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                            <input type="hidden" name="u" value="recuperarClave">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="public/js/alertas/boton-registrar.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </div>
</body>
</html>