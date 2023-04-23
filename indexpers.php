<?php
include_once "conexion.php";


if (isset($_POST["usu"]) && ($_POST["pass"])){
    $usu=$_POST["usu"];
    $pass=$_POST["pass"];
    $sql = "SELECT COUNT(*) as num, nombre, contraseña FROM usuarios WHERE nombre='$usu';";
}
else{
    header("Location:index.php");
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header><h1>Bienvenido, <?=$usu?></h1></header>
    <a href="index.php">Cerrar sesion</a>
</body>
</html>
