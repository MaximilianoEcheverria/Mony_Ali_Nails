<?php
require_once("vista/elementos/header.php");
?>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <div class="card-header d-flex">
      <div class="p-2 w-100">
        <p class="h3 text-dark">Clientes</p>
      </div>
      <div class="p-2 flex-shrink-1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bxs-user-plus'></i></button>
        </div>
      </div>
    </div>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Historial</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($dato)) :
        foreach ($dato as $key => $value)
          foreach ($value as $v) : ?>
          <tr>
            <td><?php echo $v['id_cliente'] ?> </td>
            <td><?php echo $v['nombre'] ?> </td>
            <td><?php echo $v['correo'] ?> </td>
            <td><?php echo $v['telefono'] ?> </td>
            <td><?php echo $v['diagnostico'] ?></td>
            <td>
              <div class="btn-group btn-group" role="group" aria-label="">
                <a class="btn btn-warning" href="index.php?c=editar&id_cliente=<?php echo $v['id_cliente'] ?>"><i class="icon ion-md-create"></i></a>
                <a id="eliminarCliente" class="btn btn-danger" href="index.php?c=eliminar&id_cliente=<?php echo $v['id_cliente'] ?>"><i class="icon ion-md-trash"></i></a>
                <a class="btn btn-secondary" href="index.php?t=mostrar&id_cliente=<?php echo $v['id_cliente'] ?>"><i class="icon ion-md-calendar"></i></a>
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
</div>
</main>
</div>
</div>
<?php require('vista\elementos\modals\modal-cliente.php')

?>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public\js\alertas\botones-eliminar.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
</body>

</html>