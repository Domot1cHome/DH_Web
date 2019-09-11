<?php

$id = $_GET["id"];
$enchufeBD = mysqli_connect("localhost", "root", "", "domotic_home_bd");
$consulta = "SELECT AC.amb_com_id,AC.com_id,AC.com_estado FROM tb_ambiente_componente as AC where AC.com_id= '" . $id . "' order by AC.com_id desc LIMIT 0,1";
$crearConsulta = mysqli_query($enchufeBD, $consulta);
$cantidadFilas = mysqli_num_rows($crearConsulta);
$temporal;
while ($cantidadRegistros = mysqli_fetch_array($crearConsulta)) {
    echo '_' . $cantidadRegistros[0] . '_' . $cantidadRegistros[1] . '_' . $cantidadRegistros[2] . '_';
}
