<?php
$componente = $_GET["c"];
$estadoComponente = $_GET["eC"];
$datosConexion = new mysqli("localhost", "root", "", "domotic_home_bd");
$consulta = "UPDATE `tb_ambiente_componente` SET com_estado = '" . $estadoComponente . "', fecha_modificado=now() WHERE com_id = '" . $componente . "' ";
$resultado = $datosConexion->query($consulta);

if ($resultado == 1) {
    $foo = [true];
    echo json_encode($foo);
} else {

    $foo = [false];
    echo json_encode($foo);
}
