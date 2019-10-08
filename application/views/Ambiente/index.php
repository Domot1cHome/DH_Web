<?php if (empty($ambiente)) { ?>

    <h4><b>No Hay registros</b></h4>

<?php } else { ?>

    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <i class="fas fa-table"></i> Registros de <?php echo $page; ?>
                </div>
                <div class="col text-right">
                    <a href="<?php echo base_url() ?>index.php/ambiente/crear"><i class="fas fa-folder-plus fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Capacidad de aprendices</th>
                            <th>Fecha creado</th>
                            <th>Fecha modificado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ambiente as $data) : ?>
                            <tr>
                                <td><?php echo $data->amb_id; ?></td>
                                <td><?php echo $data->amb_nombre; ?></td>
                                <td><?php echo $data->amb_capacidad; ?></td>
                                <td><?php echo $data->fecha_creado; ?></td>
                                <td><?php echo $data->fecha_modificado; ?></td>
                                <td><a href="<?php echo base_url() ?>index.php/ambiente/editar/<?php echo $data->amb_id ?>"><span><i class="far fa-edit"></i></span></a></td>
                                <td><a href="<?php echo base_url() ?>index.php/ambiente/eliminar/<?php echo $data->amb_id ?>"><span><i class="far fa-trash-alt"></i></span></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>

<?php } ?>