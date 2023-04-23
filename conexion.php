<?php
error_reporting(E_ERROR);
$driver=new mysqli_driver();
$driver->report_mode=MYSLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

function getConexion(){
    $con= new mysqli("localhost","usuarios","usuarios", "usuarios");
    return $con;
}
function mensajeError($codigo){
    if ($codigo==2002)
        return "Ha fallado la conexión a la base de datos";
    elseif ($codigo==1045)
        return "Usuario o contraseña incorrecta";
    elseif ($codigo==1044)
        return "Base de datos incorrecta";
    elseif ($codigo==1062)
        return "Este usuario ya existe";
    else
        return "Error desconocido";
}
?>