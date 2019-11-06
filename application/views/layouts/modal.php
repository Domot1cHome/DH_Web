<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Modal jQuery Autocomplete</title>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/estilos/estilo_Modal.css" rel="stylesheet">

</head>

<body>


    <!-- Modal -->
    <div class="modal fullscreen-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel" style="text-align: center;"><?php echo $encabezado ?></h4>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </ul>
                </div>
                <div class="modal-body">
                    <?php echo $cuerpo ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#myModal').modal('show');
        });
    </script>

</body>

</html>