<?php
require_once("../Logica/conexion.php");
require_once("../Logica/funciones.php");
require_once("../Logica/validarusuario.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Estilo.css">
    <title>Comprar Mercancia</title>
</head>
<body>
    <header>
        <?php
        echo $header;
        ?>   
    </header>
    <?php
    $consultalamcen = new funciones;
    $almacen = $consultalamcen->mostrarlmacen($conexion);
    ?>
    <h1 class="titulo">Comprar productos</h1>
    <form action="ConfirmarC.php" method="post">
        <h3>Nueva mercancia</h3>
        <label for="">Prodcuto a comprar:</label>
        <select name="producto" id="opcion">
            <?php 
            while($datosalmacen = mysqli_fetch_array($almacen)){
            ?>
            <option value="<?php echo $datosalmacen["nombreProducto"]?>"><?php echo $datosalmacen["nombreProducto"]?></option>
            <?php 
            }
            ?>
        </select><br><br>
        <label for="">Cantidad de cajas a comprar:</label>
        <input type="number" name="cantidad"><br><br>
        <input type="submit" value="Comprar">

    </form> 
</body>
</html>