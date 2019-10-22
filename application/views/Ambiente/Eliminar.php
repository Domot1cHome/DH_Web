<div id="page-content-wrapper">
    <div class="card mb-3">

        <div class="card-header">
            <i class="far fa-trash-alt"></i> <span class="text-secondary">Eliminar Ambiente #<?php echo @$datos_ambiente[0]->amb_id ?></span>
        </div>

        <div class="card-body">
            <?php echo form_open(); ?><br>

            <div class="form-group mb-3 col-21 col-sm-8 col-md-8 col-lg-4 col-xl-3">
                ¿Esta seguro que desea eliminar el <?php echo @$datos_ambiente[0]->amb_nombre ?>?
            </div>

            <div class="form-group mb-2 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php echo form_submit('btn_continuar', 'Continuar', "class='btn btn-primary btn-sm' style='margin-bottom: 15px;' "); ?>
                <a href="<?php echo base_url() ?>index.php/ambiente" class="btn btn-link " style='margin-bottom: 15px;'>| o Cancelar</a>
            </div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>