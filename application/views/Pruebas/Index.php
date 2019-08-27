<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estilos/estilo_Index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/util.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



</head>

<body>

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

    <nav class="navbar navbar-secundary bg-light">
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            Domotic Home
        </a>

        <a href="#ventanaModal" role="button" class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal">Login</a>

    </nav>

    <div id="ventanaModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body wrap-login100 bgtransparent">

                    <!-- <div class="text-center bgred">
                        <?php echo form_open('') ?>

                        <div class="p-b-20">
                            Login
                        </div>

                        <div class="p-b-20">
                            <?php echo form_input($input_Usuario) ?>
                        </div>

                        <div class="p-b-20">
                            <?php echo form_input($input_Codigo) ?>
                        </div>

                        <div class="p-b-20">
                            <?php echo form_submit($submit_Login) ?>
                        </div>

                        <?php echo form_close() ?>

                    </div> -->

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

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Domotic<span>Home</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Acerca de nosotros</a>
                ·
                <a href="#">Contáctanos</a>
            </p>

            <p class="footer-company-name">Domotic Home &copy; 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span></span> Santiago de Cali, Colombia</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+57 01800666</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:soporte@domotichome.com">soporte@domotichome.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Acerca de nuestro proyecto</span>
                <p>Somos un grupo de pelaos que quieren terminar su proyecto del SENA... </p>
            </p>

            <div class="footer-icons">


                <a href="#"><i class="fa fa-at"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>

    <script src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>

</html>