<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo servicio</h5>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <form class="p-4" method="post" action="">
                    <div class="mb-3">
                        <label for="Servicio" class="form-label">
                            <p class="text-dark">Servicio</p>
                        </label>
                        <input type="text" id="servicio" name="servicio" class="form-control" required>
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" id="precio" name="precio" class="form-control" required></br>
                        <input type="submit" id="btnServicioSubmit" class="btn btn-primary btn-lg" name="btn" value="Guardar"><br>
                        <input type="hidden" name="s" value="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>