<?php
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");

$idproducto = $_POST["id"];
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$subtotal = $_POST["subtotal"];
$total = $_POST["total"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$rfc = $_POST["rfc"];
$correo = $_POST["correo"];

try{
    $venta = new funciones;
    $venta->venta($conexion, $subtotal, $total);

    $traeridventa = new funciones;
    $venta = $traeridventa->consultaventa($conexion, $subtotal, $total);

    while($datosventa=mysqli_fetch_array($venta)){
        $idventa = $datosventa["idVenta"];
    }

    $nuevafactura = new funciones;
    $nuevafactura->factura($conexion, $nombre, $direccion, $telefono, $rfc, $correo, $idventa);

    $productovendido = new funciones;
    $productovendido->productovendido($conexion, $idproducto, $cantidad, $idventa);

    $descontarproducto = new funciones;
    $descontarproducto->descontarproducto($conexion, $cantidad, $producto, $idproducto);

    echo "<script>window.alert('La venta se realizo con exito')</script>";
    
    if(isset($_POST["factura"])){
        
        echo "<script>window.location.href='../Pagina/Factura.php?id=$idventa'</script>";
    

    }else{
        echo "<script>window.location.href='../Pagina/Almacen.php'</script>";
    }
    


}catch(Exception $e){
    
    echo "<script>window.alert('Ha ocurrido un error al realizar la venta')</script>";
    echo "<script>window.location.href='../Pagina/Almacen.php'</script>";
}

?>