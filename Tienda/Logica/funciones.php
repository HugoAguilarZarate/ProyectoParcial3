<?php
class funciones {
    function validausuario($conexion, $usuario, $contrasena){
        $usuario = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
        $validausuario = mysqli_query($conexion, $usuario);
        return $validausuario;
    }
    function nuevousuario($conexion, $usuario, $contrasena, $fecha){
        $registro = "INSERT INTO usuario(usuario, contrasena, fecha, rol) VALUES ('$usuario','$contrasena','$fecha','vendedor')";
        $nuevoregistro = mysqli_query($conexion, $registro);

    }
    function mostrarlmacen($conexion){
        $mostrar = "SELECT * FROM almacen ORDER BY idProducto";
        $almacen = mysqli_query($conexion, $mostrar);
        return $almacen;
    }
    function vender($conexion, $id){
        $producto = "SELECT * FROM producto WHERE idProducto ='$id'";
        $nuevaventa = mysqli_query($conexion, $producto);
        return $nuevaventa;

    }
    function productovendido($conexion, $idproducto, $cantidad, $idventa){
        $vendido = "INSERT INTO productovendido(idProducto, cantidad, idVenta) VALUES ('$idproducto','$cantidad','$idventa')";
        $nuevaventa = mysqli_query($conexion, $vendido);


    }
    function venta($conexion, $subtotal, $total){
        $venta = "INSERT INTO venta(subTotal, total) VALUES ('$subtotal', '$total')";
        $registrodeventa = mysqli_query($conexion, $venta);

    }
    function factura($conexion, $nombre, $direccion, $telefono, $rfc, $correo, $idventa){
        $generafactura = "INSERT INTO factura(nombre, direccion, telefono, rfc, correo, idVenta) VALUES ('$nombre', '$direccion', '$telefono', '$rfc', '$correo', '$idventa')";
        $nuevafactura = mysqli_query($conexion, $generafactura);

    }
    function consultaventa($conexion, $subtotal, $total){
        $factura = "SELECT idVenta FROM venta WHERE subTotal ='$subtotal' AND total ='$total'";
        $cosulta = mysqli_query($conexion, $factura);
        return $cosulta;

    }
    function descontarproducto($conexion, $cantidad, $producto, $idproducto){
        $cantidadcajas = floor($cantidad / 20);
        $productoxseparado = $cantidad % 20;

        $consultacajas = "SELECT * FROM almacen WHERE nombreProducto ='$producto' AND idProducto = '$idproducto'";
        $consulta = mysqli_query($conexion, $consultacajas);

        while ($datosalmacen = mysqli_fetch_array($consulta)){
            $cajas = $datosalmacen["numCajasExisten"];
            $productos = $datosalmacen["cantidadPorCaja"];

        }

        if($productoxseparado>$productos){
            $descontarproducto = $productos - $productoxseparado + 20;
           if($cantidadcajas<=1){
                $descontarcaja = $cajas - 1;

           } else{
                $cantidadcajas = $cantidadcajas - 1;
                $descontarcaja = $cajas - $cantidadcajas;


           } 

        }else{
            $descontarcaja = $cajas - $cantidadcajas;
            $descontarproducto = $productos - $productoxseparado;

        }
       
        
        $descontarc = "UPDATE almacen SET cantidadPorCaja='$descontarproducto' WHERE idProducto ='$idproducto' AND nombreProducto='$producto'";
        $ndescontarc = mysqli_query($conexion, $descontarc);

        $descontarp = "UPDATE almacen SET numCajasExisten='$descontarcaja' WHERE idProducto ='$idproducto' AND nombreProducto='$producto'";
        $ndescontarp = mysqli_query($conexion, $descontarp);

        $descontarc2 = "UPDATE producto SET productosxCaja='$descontarproducto' WHERE idProducto ='$idproducto' AND nombreProducto='$producto'";
        $ndescontarc2 = mysqli_query($conexion, $descontarc2);

        $descontarp2 = "UPDATE producto SET existenciasxCaja='$descontarcaja' WHERE idProducto ='$idproducto' AND nombreProducto='$producto'";
        $ndescontarp2 = mysqli_query($conexion, $descontarp2);
    }
    function consultafactura($conexion, $idventa){
        $factura = "SELECT * FROM factura WHERE idFactura = '$idventa'";
        $pedirfactura = mysqli_query($conexion, $factura);
        return $pedirfactura;
    }
    function todaslasventas($conexion){
        $ventas = "SELECT * FROM venta";
        $pedirventas = mysqli_query($conexion, $ventas);
        return $pedirventas;

    }
    function solicitarproductos($conexion, $nombreproducto){
        $productos = "SELECT * FROM producto WHERE nombreProducto ='$nombreproducto'";
        $peticion = mysqli_query($conexion, $productos);
        return $peticion;

    }
    function solicitudtrnasferencia($conexion, $idproducto, $cantidad, $fecha, $estado){
        $solitransferencia = "INSERT INTO solicitudtransferencia(fecha, idProducto, cantidadcajas, estado)VALUES ('$fecha','$idproducto','$cantidad','$estado') ";
        $solinueva = mysqli_query($conexion, $solitransferencia);

    }
    function transferencia($conexion, $fecha, $idsolicitud){
        $transferencia = "INSERT INTO transferencias(fechaTransferencia, idSolicitud) VALUES('$fecha','$idsolicitud')";
        $nuevatrnasferencia = mysqli_query($conexion, $transferencia);

    }
    function consultatransefenrencia($conexion){
        $consulta = "SELECT * FROM solicitudtransferencia ORDER BY idSolicitud DESC LIMIT 1";
        $nuevaconsulta = mysqli_query($conexion, $consulta);
        return $nuevaconsulta;

    }
    function alamcenarcajas($conexion, $idproducto, $cantidadcajas){
        $consultacajas = "SELECT * FROM almacen WHERE idProducto ='$idproducto'";
        $cajas = mysqli_query($conexion, $consultacajas);
        
        while ($ncantidadcajas = mysqli_fetch_array($cajas)){
            $cajasexisten = $ncantidadcajas["numCajasExisten"];

        }

        $sumarcajas = $cajasexisten + $cantidadcajas;

        $almacenarcajas = "UPDATE almacen SET numCajasExisten='$sumarcajas' WHERE idProducto ='$idproducto'";
        $almacenar = mysqli_query($conexion, $almacenarcajas);
    }
}

?>