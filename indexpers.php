<?php
include_once "conexion.php";


if (isset($_POST["usu"]) && ($_POST["pass"])){
    $usu=$_POST["usu"];
    $pass=$_POST["pass"];
    $sql = "SELECT COUNT(*), nombre, contraseña FROM usuarios WHERE nombre='$usu';";
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
<h1>Lista de tareas</h1>
<main class="container">
    <form action="anadir.php" method="post">
        <div>
            <input type="text" placeholder="Escriba una nueva tarea" id="tarea" name="tarea">
        </div>
        <button id="boton">Añadir</button>
    </form>
    <p>&nbsp;</p>
</main>
</body>
</html>
