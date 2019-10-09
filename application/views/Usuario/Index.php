<?php if (empty($usuario)) { ?>

    <h4><b>No Hay registros de <?php echo $page; ?></b></h4>

<?php } else { ?>


    <?php
        $arregloRoles = array(
            '1' => 'Super Usuario',
            '2' => 'Usuario',
        );
        ?>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <i class="fas fa-table"></i> Listado de <?php echo $page; ?>
                </div>
                <div class="col text-right">
                    <a href="<?php echo base_url() ?>index.php/usuario/crear"><i class="fas fa-folder-plus fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Rol</th>
                            <th>Fecha creado</th>
                            <th>Fecha modificado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario as $data) : ?>
                            <tr>
                                <td><?php echo $data->usu_id; ?></td>
                                <td><?php echo $data->usu_nombre; ?></td>
                                <td><?php echo $data->usu_apellido; ?></td>
                                <td><?php echo $arregloRoles[$data->usu_rol_id]; ?></td>
                                <td><?php echo $data->fecha_creado; ?></td>
                                <td><?php echo $data->fecha_modificado; ?></td>
                                <td><a href="<?php echo base_url() ?>index.php/usuario/editar/<?php echo $data->usu_id ?>"><span><i class="far fa-edit"></i></span></a></td>
                                <td><a href="<?php echo base_url() ?>index.php/usuario/eliminar/<?php echo $data->usu_id ?>"><span><i class="far fa-trash-alt"></i></span></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
<?php } ?>