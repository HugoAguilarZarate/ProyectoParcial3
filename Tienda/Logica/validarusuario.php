<?php
session_start();
if(!isset($_SESSION["user"]) || !isset($_SESSION["password"])){
    session_destroy();
    echo "<script>window.loaction.href='../Index.php'</script>";


}else{
    $usuario= $_SESSION["user"];
    $pass = $_SESSION["password"];

    $rol = new funciones;
    $tiporol = $rol->validausuario($conexion, $usuario, $pass);

    $peticion = mysqli_fetch_array($tiporol);
    if($peticion["rol"]=="supervisor"){
        $header = "
        <h1>Tienda online</h1>
        <div id='usuario'>
        <label for=''> $usuario</label>
        </div>
        
        <button class='header'><a href='Almacen.php'>Almacen</a></button>
        <button class='header'><a href='Solicitarproducto.php'>Comprar mercancia</a></button>
        <button class='header'><a href='Ventas.php'>Ventas</a></button>";

    }else{
        $header = "
        <h1>Tienda online</h1>
        <div id='usuario'>
        <label for=''> $usuario</label>
        </div>
        
        <button class='header'><a href='Almacen.php'>Almacen</a></button>
        <button class='header'><a href='Ventas.php'>Ventas</a></button>";
    }

}

?>