<?php

$input_usu_nombre = array(
    'id'            => 'usu_nombre',
    'name'          => 'usu_nombre',
    'value'         => set_value('usu_nombre', @$data_usuario[0]->usu_nombre)
);

$input_usu_apellido = array(
    'id'            => 'usu_apellido',
    'name'          => 'usu_apellido',
    'value'         => set_value('usu_apellido', @$data_usuario[0]->usu_apellido)
);


$dropdown_usu_tip_doc_id = array(
    'id'            => 'usu_tip_doc_id',
    'name'          => 'usu_tip_doc_id',
    // 'value'         => set_value('usu_tip_doc_id', @$data_usuario[0]->usu_tip_doc_id)
);

$input_usu_num_doc = array(
    'id'            => 'usu_num_doc',
    'name'          => 'usu_num_doc',
    'value'         => set_value('usu_num_doc', @$data_usuario[0]->usu_num_doc)
);

$dropdown_usu_rol_id = array(
    'id'            => 'usu_rol_id',
    'name'          => 'usu_rol_id',
    // 'value'         => set_value('usu_rol_id', @$data_usuario[0]->usu_rol_id)
);
$dropdown_usu_tip_doc_id = array(
    'id'            => 'usu_tip_doc_id',
    'name'          => 'usu_tip_doc_id',
    'value'         => set_value('usu_tip_doc_id', @$data_usuario[0]->usu_tip_doc_id)
);

$input_usu_email = array(
    'id'            => 'usu_email',
    'name'          => 'usu_email',
    'value'         => set_value('usu_email', @$data_usuario[0]->usu_email)
);

$input_usu_usuario = array(
    'id'            => 'usu_usuario',
    'name'          => 'usu_usuario',
    'value'         => set_value('usu_usuario', @$data_usuario[0]->usu_usuario)
);

// $input_usu_codigo = array(
//     'id'            => 'usu_codigo',
//     'name'          => 'usu_codigo',
//     'value'         => set_value('usu_codigo', @$data_usuario[0]->usu_codigo)
// );

// $input_usu_codigo_repeat = array(
//     'id'            => 'usu_codigo_repeat',
//     'name'          => 'usu_codigo_repeat',
//     'value'         => set_value('usu_codigo', @$data_usuario[0]->usu_codigo)
// );

?>

<div class="card mb-3">

    <div class="card-header">
        <i class="far fa-edit"></i> <span class="text-secondary">Editar <?php echo $page; ?></span>
    </div>

    <div class="card-body">

        <?php echo form_open(); ?><br>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Nombres:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_nombre, '', "class='form-control'"); ?>
            <?php echo form_error('usu_nombre'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Apellidos:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_apellido, '', "class='form-control'"); ?>
            <?php echo form_error('usu_apellido'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Seleccione el tipo de documento:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_dropdown($dropdown_usu_tip_doc_id); ?>
            <?php echo form_error('usu_tip_doc_id'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Número de documento:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_num_doc, '', "class='form-control'"); ?>
            <?php echo form_error('usu_num_doc'); ?>
        </div>


        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Seleccione el rol:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_dropdown($dropdown_usu_rol_id); ?>
            <?php echo form_error('usu_rol_id'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Correo electrónico:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_email, '', "class='form-control'"); ?>
            <?php echo form_error('usu_email'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Usuario:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_usuario, '', "class='form-control'"); ?>
            <?php echo form_error('usu_usuario'); ?>
        </div>

        <!-- <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Contraseña:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_codigo, '', "class='form-control'"); ?>
            <?php echo form_error('usu_codigo'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">
                <b><?php echo form_label('Repetir contraseña:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_usu_codigo_repeat, '', "class='form-control'"); ?>
            <?php echo form_error('usu_codigo_repeat'); ?>
        </div> -->



        <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo form_submit('btn_guardar', 'Guardar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' "); ?>
            <a href="<?php echo base_url() ?>index.php/usuario" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
        </div>

        <?php echo form_close(); ?>

    </div>


</div>

<script>
    function LlenarSelectorTipoDocumentos() {

        $.ajax(
            "<?php echo base_url() ?>" + "index.php/usuario/traertiposdocumentos"
        ).done(function(data) {
            var opts = $.parseJSON(data);
            $('#usu_tip_doc_id').append('<option value="" disabled selected>Seleccionar...</option>');
            $.each(opts, function(i, d) {
                $('#usu_tip_doc_id').append('<option value="' + d.tip_doc_id + '">' + d.tip_doc_nombre + '</option>');
            });

        }).fail(function(jqXHR) {
            alert(jqXHR.statusText);
        });
    }

    function LlenarSelectorRoles() {

        $.ajax(
            "<?php echo base_url() ?>" + "index.php/usuario/traerroles"
        ).done(function(data) {
            var opts = $.parseJSON(data);




            $('#usu_rol_id').append('<option value="" disabled selected>Seleccionar...</option>');
            $.each(opts, function(i, d) {

                // if (d.rol_id == 2) {
                //     console.log(d.rol_id);
                //     $('#usu_rol_id').append('<option value="' + d.rol_id + '">' + d.rol_nombre + '</option>');
                //     document.getElementById("usu_rol_id").selected=true;
                // }

                console.log('Truno');

                

            });

        }).fail(function(jqXHR) {
            alert(jqXHR.statusText);
        });
    }

    $(document).ready(function() {
        LlenarSelectorTipoDocumentos();
        LlenarSelectorRoles();
    });
</script>