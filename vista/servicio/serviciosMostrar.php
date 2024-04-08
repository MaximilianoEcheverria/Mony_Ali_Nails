<?php
require_once("vista/elementos/header.php");
?>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <div class="card-header d-flex">
      <div class="p-2 w-100">
        <p class="h3 text-dark">Servicios</p>
      </div>
      <div class="p-2 flex-shrink-1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bx-cart-add'></i></button>
        </div>
      </div>
    </div>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Servicio</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($dato)) :
        foreach ($dato as $key => $value)
          foreach ($value as $v) : ?>
          <tr>
            <td><?php echo $v['id_servicio'] ?> </td>
            <td><?php echo $v['servicio'] ?> </td>
            <td><?php echo $v['precio'] ?> </td>
            <td>
              <div class="btn-group" role="group" aria-label="">
                <a class="btn btn-warning" href="index.php?s=editar&id_servicio=<?php echo $v['id_servicio'] ?>"><i class='bx bxs-edit'></i></a>
                <a onclick="return confirm('¿Estas segura de eliminar este servicio?');" class="btn btn-danger" href="index.php?s=eliminar&id_servicio=<?php echo $v['id_servicio'] ?>"><i class="icon ion-md-trash"></i></a>
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
<?php
require_once("vista/elementos/modals/modal-servicio.php");
?>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<!--<script src="public\js\alertas.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="public/js/tooltip.js"></script>
</body>

</html>