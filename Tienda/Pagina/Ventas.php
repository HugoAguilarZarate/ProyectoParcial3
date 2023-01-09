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
    <title>Ventas</title>
</head>
<body>
    <header>
        <?php
        echo $header;
        ?>   
    </header>
    <h1 class="titulo">Ventas Realizadas</h1>
    <?php
    $ventas = new funciones;
    $todasventas = $ventas->todaslasventas($conexion);
    
    ?>
    <table>
        
            <thead>
                <tr>
                    <th>ID de venta</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Ver factura</th>
                </tr>
            </thead>
        
            <tbody>
                <?php 
                while ($datosventas = mysqli_fetch_array($todasventas)){
                ?>  
               <tr>
                    <td><?php echo $datosventas["idVenta"]; ?></td>
                    <td><?php echo "$".$datosventas["subTotal"]; ?></td>
                    <td><?php echo "$".$datosventas["total"]; ?></td>
                    <td><button><a href="Factura.php?id=<?php echo $datosventas["idVenta"]; ?>">factura</a></button></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        
    </table> 
</body>
</html>