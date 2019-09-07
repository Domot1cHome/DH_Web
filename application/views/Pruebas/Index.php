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

<br>
<br>
<center>
<div class="card" style="width: 80%; height: 300px;" margin="auto">
    <h1>DOMOTIZA TU HOGAR</h1>

    
<!-- inicio scroll -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/Jn/public/images/f.jpg" class="d-block w-100" widght="100" height="350">
            </div>
            <div class="carousel-item">
            <img src="/Jn/public/images/fon.jpg" class="d-block w-100" widght="100" height="350">
            </div>
            <div class="carousel-item">
            <img src="/Jn/public/images/dom.jpg" class="d-block w-100" widght="100" height="350">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- fin scroll -->

</center>
