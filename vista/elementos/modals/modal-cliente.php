<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo cliente</h5>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <form class="p-4" method="post" action="">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" id="correo" name="correo" class="form-control" required>
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" id="telefono" name="telefono" class="form-control" required>
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
</div>