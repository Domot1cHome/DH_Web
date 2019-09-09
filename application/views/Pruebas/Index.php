<?php

$form = array(
    'class'  => 'login100-form validate-form p-l-40 p-r-55 p-t-138',
);

$input_Usuario = array(
    'class'  => 'input100',
    'id'   => 'usuario',
    'name'   => 'usuario',
    'placeholder'   => 'Usuario',
);

$input_Codigo = array(
    'class'  => 'input100',
    'id'   => 'password',
    'name'   => 'password',
    'placeholder'   => 'Contraseña',
    'type' => 'password',
);

$submit_Login = array(
    'class'  => 'login100-form-btn',
    'id'   => 'boton',
    'name'   => 'boton',
    'value'   => 'Iniciar sesión',

);

?>


<div id="ventanaModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body wrap-login100 bgtransparent">

                <?php echo form_open('', $form) ?>
                <span class="login100-form-title">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Digite el usuario">

                    <?php echo form_input($input_Usuario) ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Digite la contraseña">

                    <?php echo form_input($input_Codigo) ?>
                </div>

                <div class="container-login100-form-btn">

                    <?php echo form_submit($submit_Login) ?>
                </div>

                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>

<video src="<?php echo base_url(); ?>recursos/fon1.mp4" autoplay loop muted></video>