<?php

$input_amb_nombre = array(
    'name'          => 'amb_nombre',
    'id'            => 'amb_nombre',
    'maxlength'     => '200',
    'size'          => '50',
);


$input_amb_cantidad = array(
    'name'          => 'amb_cantidad',
    'type'          => 'number',
    'id'            => 'amb_cantidad',
    'maxlength'     => '20',
    'size'          => '11',
);


?>
<div class="card mb-3">
    <div class="card-header">
        <span class="text-secondary">Crear Ambiente</span>
    </div>
    <div class="card-body">
        <?php echo form_open() ?><br>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend"><b>
                    <?php echo form_label('Nombre Ambiente:', '', 'class="text-secondary"') ?></b>
            </div>
            <?php echo form_input($input_amb_nombre, '', "class='form-control'"); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend"><b>
                    <?php echo form_label('Cantidad de aprendices:', '', 'class="text-secondary"') ?></b>
            </div>
            <?php echo form_input($input_amb_cantidad, '', "class='form-control'"); ?>
        </div>


        <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo form_submit('btn_guardar', 'Guardar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' ") ?>
            <a href="./" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
        </div>

        <?php echo form_close() ?>
    </div>
</div>