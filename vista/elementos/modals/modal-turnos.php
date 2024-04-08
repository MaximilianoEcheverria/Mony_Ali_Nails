<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Turno</h5>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <form class="p-4" method="post" action="">
                    <div class="mb-3">
                        <?php
                        if (!empty($cli)) :
                            foreach ($cli as $key => $value)
                                foreach ($value as $c) : ?>
                                <label for="ID" class="form-label">Cliente</label>
                                <input type="text" id="id_cliente" name="id_cliente" class="form-control" value="<?php echo $c['id_cliente']; ?>" readonly>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <label for="servicio" class="form-label">Servicio</label></br>
                        <select class="form-select" aria-label="Default select example" id="servicio" name="servicio" required>
                            <option selected>Opciones</option>
                            <?php
                            if (!empty($ser)) :
                                foreach ($ser as $key => $value)
                                    foreach ($value as $v) : ?>
                                    <option value="<?php echo $v['id_servicio'] ?>"><?php echo $v['servicio'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select></br>
                        <label for="ingreso" class="form-label">Fecha de turno</label></br>
                        <input type="datetime-local" name="fecha_turno" required></br>
                        </br>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="btn" value="Guardar"><br>
                            <input type="hidden" name="t" value="guardar">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>