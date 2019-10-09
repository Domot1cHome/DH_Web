<?php

$input_usu_nombre = array(
    'id'            => 'usu_nombre',
    'name'          => 'usu_nombre',
    'value'         => set_value('usu_nombre', @$ambiente[0]->usu_nombre)
);

$input_usu_apellido = array(
    'id'            => 'usu_apellido',
    'name'          => 'usu_apellido',
    'value'         => set_value('usu_apellido', @$ambiente[0]->usu_apellido)
);

$input_usu_tip_doc_id = array(
    'id'            => 'usu_tip_doc_id',
    'name'          => 'usu_tip_doc_id',
    'value'         => set_value('usu_tip_doc_id', @$ambiente[0]->usu_tip_doc_id)
);

$input_usu_num_doc = array(
    'id'            => 'usu_num_doc',
    'name'          => 'usu_num_doc',
    'value'         => set_value('usu_num_doc', @$ambiente[0]->usu_num_doc)
);

$input_usu_rol_id = array(
    'id'            => 'usu_rol_id',
    'name'          => 'usu_rol_id',
    'value'         => set_value('usu_rol_id', @$ambiente[0]->usu_rol_id)
);

$input_usu_email = array(
    'id'            => 'usu_email',
    'name'          => 'usu_email',
    'value'         => set_value('usu_email', @$ambiente[0]->usu_email)
);

$input_usu_usuario = array(
    'id'            => 'usu_usuario',
    'name'          => 'usu_usuario',
    'value'         => set_value('usu_usuario', @$ambiente[0]->usu_usuario)
);

$input_usu_codigo = array(
    'id'            => 'usu_codigo',
    'name'          => 'usu_codigo',
    'value'         => set_value('usu_codigo', @$ambiente[0]->usu_codigo)
);

?>

<div class="card mb-3">

    <div class="card-header">
        <i class="far fa-edit"></i> <span class="text-secondary">Editar <?php echo $page; ?></span>
    </div>

    <div class="card-body">

        <?php echo form_open(); ?> <br>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">

                <b>
                    <?php echo form_label('Nombres:', '', 'class="text-secondary"'); ?>
                </b>

            </div>

            <?php echo form_input($input_usu_nombre, '', "class='form-control'"); ?>
            <?php echo form_error('usu_nombre'); ?>

        </div>

        <!-- usu_id,
                                usu_nombre,
                                usu_apellido,
                                usu_tip_doc_id,
                                usu_num_doc,
                                usu_rol_id,
                                usu_email,
                                usu_usuario,
                                usu_codigo,
                                fecha_creado,
                                fecha_modificado -->
        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend"><b>
                    <?php echo form_label('Apellidos:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_apellido, '', "class='form-control'"); ?>
            <?php echo form_error('usu_apellido'); ?>
        </div>

        <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo form_submit('btn_guardar', 'Guardar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' ") ?>
            <a href="<?php echo base_url() ?>index.php/usuario" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>