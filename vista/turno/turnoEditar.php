<?php
require_once("vista/elementos/header.php");
?>
<div id="content" class="bg-grey w-100">
    <section>
        <main class="container mt">
            <div class="row justify-content-center">
                <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <h5 class="card-header">
                            Editar cliente
                        </h5>
                        <div class="card-body">
                            <form class="p-4" method="get" action="">
                                <div class="mb-3">
                                <?php
                                    if(!empty($dato)):
                                    foreach($dato as $key => $value)
                                    foreach($value as $c):?>
                                    <label for="id_turno" class="form-label">ID</label>
                                    <input type="text" id="id_turno" name="id_turno" class="form-control" value="<?php echo $c['id_turno']; ?>" readonly>
                                    <label for="id_cliente" class="form-label">ID Cliente</label>
                                    <input type="text" id="id_cliente" name="id_cliente" class="form-control" value="<?php echo $c['id_cliente']; ?>" readonly>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    <label for="id_servicio" class="form-label">Servicio</label></br>
                                    <select class="form-select" aria-label="Default select example" id="id_servicio" name="id_servicio" required>
                                    <option selected>Opciones</option>
                                    <?php
                                    if(!empty($ser)):
                                    foreach($ser as $key => $value)
                                    foreach($value as $v):?>
                                    <option value="<?php echo $v['id_servicio'] ?>"><?php echo $v['servicio'] ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    </select>
                                    <label for="fecha_turno" class="form-label">Fecha de turno</label></br>
                                    <input type="datetime-local" id="fecha_turno" name="fecha_turno"required></br>
                                    </br>
                                    <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                                    <input type="hidden" name="t" value="actualizar">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </main>
    </section>
</div>
<?php
require_once("vista/elementos/footer.php");