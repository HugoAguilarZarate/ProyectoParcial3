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
    <title>Almacen</title>
</head>

<body>
    
    <header>
        <?php
        echo $header;
        ?>   
    </header>
    <h1 class="titulo">Almacen</h1>
    <table>
        <thead>
            <tr>
            <th>ID del producto</th>
            <th>Producto</th>
            <th>Cantidad de producto por caja</th>
            <th>Cantidad de cajas</th>
            <th>Vender</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $mostrar = new funciones;
        $mostaralmacen = $mostrar->mostrarlmacen($conexion);

        while($datos = mysqli_fetch_array($mostaralmacen)){

        ?>
            <tr>
            <td><?php echo $datos["idProducto"];?></td>
            <td><?php echo $datos["nombreProducto"];?></td>
            <td><?php echo $datos["cantidadPorCaja"];?></td>
            <td><?php echo $datos["numCajasExisten"];?></td>
            <td><button class="botontabla"><a href="Vender.php?id=<?php echo $datos["idProducto"];?>">Vender</a></button></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
        
    </table> 
    
</body>
</html>