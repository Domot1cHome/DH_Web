<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos/estiloLogin.css">
</head>

<body>
    <div class="padre">
        <div class="card ">
            <div id="encabezado" class="card-header">
                <h1>Login</h1>
            </div>


            <?php
            $usuario = array(
                'id' => 'usuario',
                'class' => 'form-control w-25 ',
                'placeholder' => 'Usuario',

            );

            $contraseña = array(
                'id' => 'contraseña',
                'type' => 'password',
                'class' => 'form-control w-25',
                'placeholder' => 'Contraseña',
                'text-align' => '-webkit-center',
            );

            $boton = array(
                'id' => 'boton',
                'class' => 'btn btn-primary w-25',
                'name' => 'boton',
                'value' => 'Iniciar sesión',
            );

            ?>

            <?php echo form_open('ControladorLogin/') ?>
            <div class="individualizador">
                <?php echo form_input($usuario) ?>
            </div>
            <div class="individualizador">
                <?php echo form_input($contraseña) ?>
            </div>
            <div class="individualizador">
                <?php echo form_submit($boton) ?>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</body>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>