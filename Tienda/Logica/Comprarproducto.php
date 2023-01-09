<?php
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");

$idproducto = $_POST["id"];
$cantidad = $_POST["cantidad"];

$fecha = date("y/m/d");
$estado = "Enviado";
try{
    $transferencia = new funciones;
    $transferencia->solicitudtrnasferencia($conexion, $idproducto, $cantidad, $fecha, $estado);

    $consultransferencia = new funciones;
    $idsoli = $consultransferencia->consultatransefenrencia($conexion);

    while($datostransfenrecia = mysqli_fetch_array($idsoli)){
        $idsolicitud= $datostransfenrecia["idSolicitud"];

    }
    $nuevatransferencia = new funciones;
    $nuevatransferencia->transferencia($conexion, $fecha, $idsolicitud);

    $alamacenarcajas = new funciones;
    $alamacenarcajas->alamcenarcajas($conexion, $idproducto, $cantidad);

    echo "<script>window.alert('Cajas compradas con exito')</script>";
    echo "<script>window.location.href='../Pagina/Almacen.php'</script>";

}catch(Exception $e){
    echo "<script>window.alert('Ha ocurrido un error al comprar el producto')</script>";
    echo "<script>window.location.href='../Pagina/Almacen.php'</script>";

}

?>