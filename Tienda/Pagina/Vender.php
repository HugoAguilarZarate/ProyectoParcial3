<?php
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");

$id = $_GET["id"];
$vender = new funciones;
$producto = $vender->vender($conexion,$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Estilo.css">
    <title>Vender Producto</title>
</head>
<body>
    <h1 class="titulo">Vender mercancia</h1>
    <?php
    while($datos = mysqli_fetch_array($producto)){
        $idproducto = $datos["idProducto"];
        $nombre = $datos["nombreProducto"];
        $productotal = $datos["existenciasxCaja"] * $datos["productosxCaja"];
        $precio = $datos["precio"];
    ?>
    <form action="ConfirmarV.php" method="post">
        <h2>Detalles de la venta</h2><br>
        <h3>Informacion del producto</h3>
        <label for="">Producto a Vender:</label>
        <input type="hidden" value="<?php echo $idproducto?> " name="idproducto">
        <input type="text" value="<?php echo $nombre?>" name="nombrepr" readonly><br><br>
        <label for="">Precio por Producto: $</label>
        <input type="text" value="<?php echo $precio?>" name="precio" readonly><br><br>
        <label for="">Productos disponibles:</label>
        <input type="text" value="<?php echo $productotal?>" name="total" readonly><br><br>
        <label for="">Cantidad a Vender:</label>
        <input type="number" name="cantidad" required>
        <h3>Informacion del comprador</h3><br><br>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        <label for="">Direción:</label>
        <input type="text" name="direccion" required><br><br>
        <label for="">Telefono:</label>
        <input type="tel" name="telefono" required><br><br>
        <label for="">RFC:</label>
        <input type="text" name="rfc" required><br><br>
        <label for="">Correo:</label>
        <input type="email" name="correo" required><br><br>
        <input type="submit" value="Vender">
    </form>
    <?php
    }
    ?>
    
</body>
</html>