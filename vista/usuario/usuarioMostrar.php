<?php
require_once("vista/elementos/header.php");
?>
    <div id="content" class="bg-grey w-100">
              <section>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                      <div class="card">
                        <h5 class="card-header">
                          Usuario
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          </div>
                        </h5>
                        <div class="card-body">
                          <div class="table-responsive">
                          <table class="table table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">ID</td>
                                <th scope="col">Usuario</td>
                                <th scope="col">Correo</td>
                                <th scope="col">Acciones</td>        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(!empty($dato)):
                                foreach($dato as $key => $value)
                                    foreach($value as $v):?>
                                <tr>
                                    <td><?php echo $v['id_usuario'] ?> </td>
                                    <td><?php echo $v['usuario'] ?> </td>
                                    <td><?php echo $v['correo'] ?> </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="">
                                            <a class="btn btn-warning" href="index.php?u=editar&id_usuario=<?php echo $v['id_usuario']?>"><i class="icon ion-md-create"></i></a>
                                            <a onclick="return confirm('¿Estas segura de eliminar su usuario?');" class="btn btn-danger" href="index.php?u=eliminar&id_usuario=<?php echo $v['id_usuario']?>"><i class="icon ion-md-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="3">NO HAY REGISTROS</td>
                                </tr>
                            <?php endif ?>
                        </tbody>  
                    </table>
                          </div>
                        </div>
                        <div class="card-footer">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                </div>
              </section>
<?php
require_once("vista/elementos/footer.php");