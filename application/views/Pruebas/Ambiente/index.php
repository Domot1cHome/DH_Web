<?php if (empty($ambiente)) { ?>

  <h4><b>No Hay usuario</b></h4>

  <?php }else { ?>

  <div class="card mb-3">
        <div class="card-header">
                <div class="row">
                        <div class="col">
                        <i class="fas fa-table"></i> Registros de <?php echo $page; ?>
                        </div>
                        <div class="col text-right">
                        <a href="<?php echo base_url()?>index.php/Prueba/ambiente/agregar"><i class="fas fa-folder-plus fa-2x"></i></a>
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
                <?php foreach ($ambiente as $data): ?>
                    <tr>
                        <td><?php echo $data->amb_id; ?></td>
                        <td><a href="<?php echo base_url()?>index.php/Prueba/ambiente/modificar/<?php echo $data->amb_id ?>"><span><i class="far fa-edit"></i></span></a></td>
                        <td><a href="<?php echo base_url()?>index.php/Prueba/ambiente/eliminar/<?php echo $data->amb_id ?>"><span><i class="far fa-trash-alt"></i></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
  </div>
</div>
  <br>
  </div>

  <?php } ?>