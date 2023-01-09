<?php
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");
$nproducto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Estilo.css">
    <title>Comfirmar Compra de Productos</title>
</head>
<body>
    <?php
    $producto = new funciones;
    $precio = $producto->solicitarproductos($conexion, $nproducto);
    while ($datosproducto = mysqli_fetch_array($precio)){
        $preciop = $datosproducto["precio"];
        $precioxcaja = $preciop * 20;
        $subtotal = $precioxcaja * $cantidad;
        $porcentaje = $subtotal * 10;
        $descuento = $porcentaje / 100;
        $total = $subtotal - $descuento;

    ?>
    <h1 class="titulo">Comfirmar compra de mercancia</h1>
    <form action="../Logica/Comprarproducto.php" method="post">
        <label for=""> ID del Producto:</label>
        <input type="text" value="<?php echo $datosproducto["idProducto"];?>" name="id" readonly><br>
        <label for=""> Nombre del Producto: <?php echo $datosproducto["nombreProducto"]; ?></label><br>   
        <label for="">Cantidad de cajas solicitada: </label>
        <input type="text" value="<?php echo $cantidad?>" name="cantidad" readonly><br>
        <label for="">Precio de compra de cajas: </label>
        <label for=""><?php echo "$".$total?></label><br>
        <input type="submit" value="Confirmar compra">
        <button><a href="Almacen.php">Cancelar</a></button>
    </form>
    <?php
     }
    ?>
    
</body>
</html>