<?php
$id = $_POST["idproducto"];
$producto = $_POST["nombrepr"];
$precio = $_POST["precio"];
$productotal = $_POST["total"];
$cantidadvender = $_POST["cantidad"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$rfc = $_POST["rfc"];
$correo = $_POST["correo"];

if ($cantidadvender>$productotal || $cantidadvender<=0){
    echo "<script>window.alert('La cantidad a vender no es valida')</script>";
    echo "<script>window.location.href='Almacen.php'</script>";
}else{
    $gananciatotal = $precio * $cantidadvender;
    if($cantidadvender<=100){
        $ganancia = $gananciatotal;
        $porcentaje = "0%, ";

    }else if ($cantidadvender>100 && $cantidadvender<=500){
       $op = $gananciatotal * 5;
       $descuento = $op / 100;
       $ganancia = $gananciatotal - $descuento;
       $porcentaje = "5%, ";

    }else if ($cantidadvender>500 && $cantidadvender<=1000){
        $op = $gananciatotal * 8;
        $descuento = $op / 100;
        $ganancia = $gananciatotal - $descuento;
        $porcentaje = "8%, ";

    }else if ($cantidadvender>1000){
        $op = $gananciatotal * 10;
        $descuento = $op / 100;
        $ganancia = $gananciatotal - $descuento;
        $porcentaje = "10%, ";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Estilo.css">
    <title>Confirmar la venta</title>
</head>
<body>
    <h1>Confirmar venta</h1>
    <form action="../Logica/Transaccion.php" method="post">
        <label for="">Producto:</label>
        <input type="text" value="<?php echo $producto?>" name="producto" readonly><br>
        <label for="">ID de producto:</label>
        <input type="text" value="<?php echo $id?>" name="id" readonly><br>
        <label for="">Cantidad a vender:</label>
        <input type="text" value="<?php echo $cantidadvender?>" name="cantidad" readonly><br>
        <label for="">Subtotal:</label>
        <label for="">$</label>
        <input type="text" value="<?php echo $gananciatotal?>" name="subtotal" readonly><br>
        <label for="">Total, aplicando un descuento por IVA de: <?php echo $porcentaje ?></label>
        <label for="">$</label>
        <input type="text" value="<?php echo $ganancia?>" name="total" readonly><br>
        <label for="">Informacion del comprador</label><br>
        <label for="">Nombre:</label>
        <input type="text" value="<?php echo $nombre?>" name="nombre" readonly><br>
        <label for="">Dirección</label>
        <input type="text" value="<?php echo $direccion?>" name="direccion" readonly><br>
        <label for="">Telefono</label>
        <input type="text" value="<?php echo $telefono?>" name="telefono" readonly>
        <label for="">RFC:</label>
        <input type="text" value="<?php echo $rfc ?>" name="rfc" readonly><br>
        <label for="">Correo:</label>
        <input type="text" value="<?php echo $correo?>" name="correo" readonly><br>
        <label for="">Generar factura</label>
        <input type="checkbox" name="factura" value="1"><br>
        <input type="submit" value="Confirmar venta">
        <button><a href="Almacen.php">Cancelar venta</a></button>
    </form>  
</body>
</html>