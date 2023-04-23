<?php
include_once "conexion.php";

if(isset($_POST["usu"]) && ($_POST["pass"])){
    $usu=$_POST["usu"];
    $pass=$_POST["pass"];
    try{
        $con=getConexion();
        $sql="select nombre,contraseña from usuarios where nombre=? && contraseña=?;";
        $st=$con->prepare($sql);
        $st->bind_param("ss",$usu,$pass);
        $st->execute();
        $st->close();
        $con->close();
        setcookie("correcto","si");
    }
    catch(mysqli_sql_exception $e){
        setcookie("error", $e->getCode());
    }
}
header("Location:index.php");
?>