<?php if (empty($componente)) { ?>

<h4><b>No Hay componente</b></h4>

<?php }else { ?>

<div class="card mb-3">
      <div class="card-header">
              <div class="row">
                      <div class="col">
                      <i class="fas fa-table"></i> Registros de <?php echo $page; ?>
                      </div>
                      <div class="col text-right">
                      <a href="<?php echo base_url()?>index.php/Prueba/componente/agregar"><i class="fas fa-folder-plus fa-2x"></i></a>
                      </div>
              </div>
      </div>
<div class="card-body">
<div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>Id</th>
                  <th><span><i class="far fa-edit"></i></span></th>
                  <th><span><i class="far fa-trash-alt"></i></span></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($componente as $data): ?>
                  <tr>
                      <td><?php echo $data->tip_id; ?></td>
                      <td><a href="<?php echo base_url()?>index.php/Prueba/componente/modificar/<?php echo $data->tip_idM; ?>"><span><i class="far fa-edit"></i></span></a></td>
                      <td><a href="<?php echo base_url()?>index.php/Prueba/componente/eliminar/<?php echo $data->tip_id; ?>"><span><i class="far fa-trash-alt"></i></span></a></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
</div>
</div>
<br>
</div>

<?php } ?>