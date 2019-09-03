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


    <link rel="icon" href="<?php echo base_url(); ?>recursos/favicon.png" type="image/png">


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



</head>

<?php unset($_SESSION['token']); ?>

<body>

    <nav class="navbar navbar-secundary bg-light">
        <a class="navbar-brand" href="<?php echo base_url() ?>Controlador/Prueba11">
            Vista Ambientes
        </a>

        <a href="<?php echo base_url() ?>"  class="btn btn-outline-danger my-2 my-sm-0" >Cerrar sesión</a>

    </nav>