<?php

$input_usu_codigo = array(
    'id'            => 'usu_codigo',
    'name'          => 'usu_codigo',
    'type'          => 'password',
    'value'         => set_value('usu_codigo', @$data_usuario[0]->usu_codigo)
);

$input_usu_codigo_repeat = array(
    'id'            => 'usu_codigo_repeat',
    'name'          => 'usu_codigo_repeat',
    'type'          => 'password',
    'value'         => set_value('usu_codigo', @$data_usuario[0]->usu_codigo)
);

?>

<div id="page-content-wrapper">
    <div class="card mb-3">

        <div class="card-header">
            <i class="fas fa-key"></i> <span class="text-secondary">Editar <?php echo $page; ?></span>
        </div>

        <div class="card-body">

            <?php echo form_open(); ?><br>

            <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
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
            </div>



            <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php echo form_submit('btn_guardar', 'Guardar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' "); ?>
                <a href="<?php echo base_url() ?>index.php/usuario" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
            </div>

            <?php echo form_close(); ?>

        </div>


    </div>
</div>

<script>
    $(document).ready(function() {});
</script>