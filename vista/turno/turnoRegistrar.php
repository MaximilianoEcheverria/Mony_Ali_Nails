<?php
require_once("vista/layouts/header.php");
?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="text-center">Nuevo turno</h1>
                </div>
                <form class="p-4" method="post" action="index.php">
                    <div class="mb-3">
                        <?php
                        if (!empty($cli)) :
                            foreach ($cli as $key => $value)
                                foreach ($value as $c) : ?>
                                <label for="ID" class="form-label">ID</label>
                                <input type="text" id="id_cliente" name="id_cliente" class="form-control" value="<?php echo $c['id_cliente']; ?>" readonly>
                                <label for="Nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $c['nombre']; ?>" readonly>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <label for="servicio" class="form-label">Servicio</label>
                        <select class="form-select" aria-label="Default select example" id="servicio" name="servicio" required>
                            <option selected>Opciones</option>
                            <?php
                            if (!empty($ser)) :
                                foreach ($ser as $key => $value)
                                    foreach ($value as $v) : ?>
                                    <option value="<?php echo $v['id_servicio'] ?>"><?php echo $v['servicio'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <label for="ingreso" class="form-label">Fecha de turno</label></br>
                        <input type="datetime-local" name="fecha_turno" required></br>
                        </br>
                        <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                        <input type="hidden" name="t" value="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
require_once("vista/layouts/footer.php");
