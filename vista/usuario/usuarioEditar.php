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
                                Editar usuario
                            </h5>
                            <div class="card-body">
                                <form class="p-4" method="POST" action="">
                                    <div class="mb-3">
                                        <?php
                                        if (!empty($dato)) :
                                            foreach ($dato as $key => $value)
                                                foreach ($value as $c) : ?>
                                                <label for="ID" class="form-label">ID</label>
                                                <input type="text" id="id_usuario" name="id_usuario" class="form-control" value="<?php echo $c['id_usuario']; ?>" readonly>
                                                <label for="usuario" class="form-label">Usuario</label>
                                                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $c['usuario']; ?>">
                                                <label for="Correo" class="form-label">Correo</label>
                                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $c['correo']; ?>">
                                                <label for="clave" class="form-label">Clave</label>
                                                <input type="password" id="clave" name="clave" class="form-control"></br>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <input type="submit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                                        <input type="hidden" name="u" value="actualizar">
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
if (isset($_REQUEST['mensaje'])) {
    switch ($_REQUEST['mensaje']) {
        case 1:
            
            echo('<script> actualizarOk() </script>');
            break;
        case 2:
            echo('<script> actualizarError()  </script>');
            break;
        
        default:
            # code...
            break;
    }

}
require_once("vista/elementos/footer.php");
