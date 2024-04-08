<?php
require_once("vista/layouts/header.php");
?>
<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="text-center">Nuevo servicio</h1>
                </div>
                <form class="p-4" method="get" action="">
                    <div class="mb-3">
                        <label for="Servicio" class="form-label">Servicio</label>
                        <input type="text" id="servicio" name="servicio" class="form-control" required>
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control" required></br>
                        <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                        <input type="hidden" name="s" value="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- !-->
<?php
require_once("vista/layouts/footer.php");