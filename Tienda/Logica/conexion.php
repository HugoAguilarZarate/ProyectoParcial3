<?php
try{
    $server = "localhost";
    $database = "tienda";
    $user = "root";
    $pass = "";

    $conexion = mysqli_connect($server, $user, $pass, $database);


}catch(Exception $ex){
    echo"<script>window.alert('Error de conexión, Por favor volver a iniciar sesión')</script>";
    echo "<script>window.location.href='../Index.html';</script>";
}
?>