<?php 
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Estilo.css">
    <title>Factura</title>
</head>
<body>
    <h1 class="titulo">Factura</h1>
    <?php
    $idfactura = $_GET["id"];
    $nuevafactura = new funciones;
    $pedirfactura = $nuevafactura->consultafactura($conexion, $idfactura);

    while($datosfactura= mysqli_fetch_array($pedirfactura)){
    
    ?>
    <div>
    <h2>Datos de la factura</h2>
    <label for="">Nombre del comprador: <?php echo $datosfactura["nombre"]; ?></label><br>
    <label for="">Direccion del comprador: <?php echo $datosfactura["direccion"]; ?></label><br>
    <label for="">Telefono del comprador: <?php echo $datosfactura["telefono"];?></label><br>
    <label for="">RFC del comprador: <?php echo $datosfactura["rfc"]; ?></label><br>
    <label for="">Correo del comprador: <?php echo $datosfactura["correo"]; ?></label><br>
    <label for="">ID de la Venta: <?php echo $datosfactura["idVenta"]; ?></label><br>
    <button><a href="Almacen.php">Volver</a></button>

    </div>
    <?php
    }
    ?>
    
</body>
</html>