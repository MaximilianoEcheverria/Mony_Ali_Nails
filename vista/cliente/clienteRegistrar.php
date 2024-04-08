<?php
require_once("vista/layouts/header.php");
?>
<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="text-center">Nuevo cliente</h1>
                </div>
                <form class="p-4" method="get" action="">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" id="correo" name="correo" class="form-control" required>
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                        <label for="diagnostico" class="form-label">Diagnostico</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="" id="diagnostico" name="diagnostico" cols="50" rows="5"></textarea>
                            <label for="diagnostico"></label>
                        </div>
                        </br>
                        <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                        <input type="hidden" name="c" value="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- !-->
<?php
require_once("vista/layouts/footer.php");