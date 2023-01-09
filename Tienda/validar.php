<?php
require_once("Logica/conexion.php");
require_once("Logica/funciones.php");

session_start();

if(isset($_POST["usuario"])){
    $_SESSION["user"] = $_POST["usuario"];
    $_SESSION["password"] = $_POST["pass"];
    $validar = new funciones;
    $validando = $validar->validausuario($conexion, $_SESSION["user"], $_SESSION["password"] );

    if(mysqli_num_rows($validando)==0){
        echo "<script>window.alert('Usuario o contraseña incorrecta')</script>";
        echo "<script>window.location.href='Index.html';</script>";
        
    }else{
        echo "<script>window.location.href='Pagina/Almacen.php';</script>";
    }

}

if(isset($_POST["nuser"])){
    $nusuario = $_POST["nuser"];
    $ncontrasena = $_POST["npass"];
    $vncontrasena = $_POST["nvpass"];

    if($ncontrasena != $vncontrasena){
        echo "<script>window.alert('La contraseña no es la misma')</script>";
        echo "<script>window.location.href='registro.html';</script>";

    }else{
        $fecha = date("y/m/d");
        try{
        $registro = new funciones;
        $registro->nuevousuario($conexion, $nusuario, $ncontrasena, $fecha);
        echo "<script>window.alert('Registro exitoso')</script>";
        echo "<script>window.location.href='Index.html';</script>";

        }catch(Exception $ex){
            echo "<script>window.alert('Ha ocurrido un error al registrase')</script>";
            echo "<script>window.location.href='Index.html';</script>";

        }
        
    }

}
?>