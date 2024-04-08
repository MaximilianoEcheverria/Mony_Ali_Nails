<?php
require_once("vista/elementos/header.php");
?>
<div id="content" class="bg-grey w-100">
    <section>
        <main class="container mt">
            <div class="row justify-content-center">
                <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header">
                            Editar cliente
                        </h5>
                        <div class="card-body">
                            <form class="p-4" method="get" action="">
                                <div class="mb">
                                <?php
                                    if(!empty($dato)):
                                    foreach($dato as $key => $value)
                                    foreach($value as $c):?>
                                    <label for="ID" class="form-label">ID</label>
                                    <input type="text" id="id_cliente" name="id_cliente" class="form-control" value="<?php echo $c['id_cliente']; ?>" readonly>
                                    <label for="Nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $c['nombre']; ?>">
                                    <label for="Correo" class="form-label">Correo</label>
                                    <input type="text" id="correo" name="correo" class="form-control" value="<?php echo $c['correo']; ?>">
                                    <label for="Telefono" class="form-label">Telefono</label>
                                    <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $c['telefono']; ?>">
                                    <label for="Diagnostico" class="form-label">Diagnostico</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="diagnostico" name="diagnostico" cols="50" rows="3"><?php echo $c['diagnostico']; ?></textarea>
                                        <label for="diagnostico"></label>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                                    <input type="hidden" name="c" value="actualizar">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </main>
    </section>
</div>
<?php
require_once("vista/elementos/footer.php");