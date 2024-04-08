<?php
require_once("vista/elementos/header.php");
?>


<div class="table-responsive">
  <table class="table table-striped table-sm">
    <div class="card-header d-flex">
      <div class="p-2 w-100">
        <p class="h3 text-dark">Turnos cliente</p>
      </div>
      <div class="p-2 flex-shrink-1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bx-calendar-plus'></i></button>
        </div>
      </div>
    </div>
    <thead>
      <tr>
        <th scope="col">ID</td>
        <th scope="col">Cliente</td>
        <th scope="col">Servicio</td>
        <th scope="col">Fecha</td>
        <th scope="col">Acciones</td>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($dato)) :
        foreach ($dato as $key => $value)
          foreach ($value as $v) : ?>
          <tr>
            <td><?php echo $v['id_turno'] ?> </td>
            <td><?php echo $v['id_cliente'] ?> </td>

            <td><?php echo $v['id_servicio'] ?> </td>
            <td><?php echo $v['fecha_turno'] ?> </td>
            <td>
              <div class="btn-group btn-group" role="group" aria-label="">
                <a class="btn btn-warning" href="index.php?t=editarTurno&id_turno=<?php echo $v['id_turno'] ?>&id_cliente=<?php echo $v['id_cliente']?>"><i class="icon ion-md-create"></i></a>
                <a onclick="return confirm('¿Estas segura de eliminar este turno?');" class="btn btn-danger" href="index.php?t=eliminar&id_turno=<?php echo $v['id_turno'] ?>&id_cliente=<?php echo $v['id_cliente'] ?>"" onclick=" return confirm('ESTA SEGURO'); false"><i class="icon ion-md-trash"></i></a>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr>
          <td colspan="3">NO HAY REGISTROS</td>
        </tr>
      <?php endif ?>
    </tbody>
  </table>
</div></main>
</div>
</div>
<?php require('vista\elementos\modals\modal-turnos.php')

?>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public\js\alertas\botones-eliminar.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
  <script src="public/js/tooltip.js"></script>
</body>

</html>
