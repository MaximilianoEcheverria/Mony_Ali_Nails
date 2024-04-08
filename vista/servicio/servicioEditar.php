

<?php
require_once("vista/elementos/header.php");
?>
<div id="content" class="bg-grey w-100">
    <section>
        <main class="container">
            <div class="row justify-content-center">
                <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <h5 class="card-header">
                            Editar servicio
                        </h5>
                        <div class="card-body">
                            <form class="p-3" method="get" action="">
                                <div class="mb">
                                <?php
                        if(!empty($dato)):
                        foreach($dato as $key => $value)
                        foreach($value as $c):?>
                        <label for="ID" class="form-label">ID</label>
                        <input type="text" id="id_servicio" name="id_servicio" class="form-control" value="<?php echo $c['id_servicio']; ?>" readonly>
                        <label for="Servicio" class="form-label">Servicio</label>
                        <input type="text" id="servicio" name="servicio" class="form-control" value="<?php echo $c['servicio']; ?>">
                        <label for="Precio" class="form-label">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control" value="<?php echo $c['precio']; ?>">
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </br>
                        <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                        <input type="hidden" name="s" value="actualizar">
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