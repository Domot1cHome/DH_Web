<?php

$input_amb_nombre = array(
    'id'            => 'amb_nombre',
    'name'          => 'amb_nombre',
    'value'            => set_value('amb_nombre'),
);

$input_amb_capacidad = array(
    'id'            => 'amb_capacidad',
    'name'          => 'amb_capacidad',
    'type'          => 'number',
    'value'            => set_value('amb_capacidad'),
);

?>

<div class="card mb-3">

    <div class="card-header">
        <i class="fas fa-plus"></i> <span class="text-secondary">Crear <?php echo $page; ?></span>
    </div>

    <div class="card-body">
        <?php echo form_open(); ?><br>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend">

                <b>
                    <?php echo form_label('Nombre Ambiente:', '', 'class="text-secondary"'); ?>
                </b>

            </div>

            <?php echo form_input($input_amb_nombre, '', "class='form-control'"); ?>
            <?php echo form_error('amb_nombre'); ?>
        </div>

        <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
            <div class="input-group-prepend"><b>
                    <?php echo form_label('Cantidad de aprendices:', '', 'class="text-secondary"'); ?></b>
            </div>
            <?php echo form_input($input_amb_capacidad, '', "class='form-control'"); ?>
            <?php echo form_error('amb_capacidad'); ?>

        </div>


        <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo form_submit('btn_guardar', 'Guardar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' "); ?>
            <a href="<?php echo base_url() ?>index.php/ambiente" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
        </div>

        <?php echo form_close(); ?>
    </div>

</div>

<script>
    function ValidarNombre() {

        $.ajax(
            "<?php echo base_url() ?>" + "index.php/Ambiente/asistencia/TraerDependencias"
        ).done(function(data) {
            var opts = $.parseJSON(data);
            $('#seccionSelector').append('<option value="">Seleccionar...</option>');
            $.each(opts, function(i, d) {
                $('#seccionSelector').append('<option value="' + d.depe_id + '">' + d.depe_nombre + '</option>');
            });
        }).fail(function(jqXHR) {
            alert(jqXHR.statusText);
        });

    }
</script>