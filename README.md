# ProyectoParcial3
Esta es una pagina web basada en una tienda conectada con una base de datos de phpmyadmin, como proyecto final de programacion web, acontinuacion se mostrara su funcionamiento:
Aqui se muestra la estructura de la pagina, la carpeta pagina contiene las paginas con las que interactua el usuario, la carpeta logica contiene la mayoriade operciones que se realizan, la carpeta estilo contiene un archivo .css que tiene el diseño de la pagina
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(3).png

El archivo Index.html es el login donde los usuarios Ingresan a la pagina
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(21).png

Si no se tiene una cuenta el login tiene una opcion que te manda al archivo Registro.thml donde se ingresara un nuevo usuario con rol de vendedor

El archivo Validar.php realiza el ingreso de sesion o el registro de un nuevo usuario:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(9).png

primero veremos la carpeta logica:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(4).png

El archivo Conexion.php, contiene la conexion con las base de datos, usando el usario por defecto y contraseña por defecto, el archivo se manda a llamar desde los otros archivos:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(6).png

El archivo Validausario.php valida las variables de sesion en cada pagina y diferencia el tipo de rol de de usuario ya sea vendedor o supervisor, de igual mandera se manda llamar en cada pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(7).png

El archivo funciones.php contiene una clase con todas las funciones que realizan peticiones la base de datos, de igual manera las funciones son llamadas desde los otros archivos que las ocupan: 
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(8).png

El archivo Transaccion.php realiza varias operaciones, realiza una venta, genera la factura, inserta un producto vendido, descuenta la mercancia de la base de datos tanto productos individuales como cajas, los datos provienen de al archivo ConfirmarV.php de la carpeta pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(10).png

El archico Comprarproducto.php realiza las operaciones para comprar mercancia esta operacion solo la puede hacer un usuario con rol de supervisor, realiza la transferencia, la solicitud de transferancia y suma los productos comprados, los datos provienen del archivo ConfirmarC.php de la carpeta pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(12).png

Ahora la carpeta pagina donde se encuntran los archivos donde el usuario va interactuar:
pagina https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(5).png

El archivo Almacen.php muestra una tabla con todos los productos disponibles, cuenta con un boton con el que se podra vender, lo redireccionara al archivo Vender.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(13).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(22).png

El archivo Vender.php es un formulario donde te muestra el precio individual y la cantidad de producto disponible segun el prodcuto seleccionado en Almacen.php, de igual manera se pediran los datos del comprador y la cantidad de producto individual a vender, aun asi el producto se descontara tanto en cantidad de cajas como producto individual tras esto redireccionara a ConfirmarV.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(14).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(23).png

El archivo ConfirmarV.php nuevamente se trata de un formulario sin embargo este no se puede editar, aqui se muestran todos los datos para la confirmacion de la venta
se muestra la ganancia que se optendra aplicando el repestivo descuento por IVA segun la cantidad de productos que se vendera, el usuario podra confirmar o cnacelar la venta, los datos se enviaran a Transaccion.php dentro la carpeta logica para reliazar las operaciones necesarias, dentro del formulario hay un chexbox pra indicar si el usuario quiere ver la factura de la venta realizada, esta factura se muestra en Factura.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(15).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(24).png

Factura.php: https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(18).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(28).png

El archivo Ventas.php le muestra al usuario todas la ventas realizadas en una tabla cada venta contiene un boton para ver la factura de cada venta:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(17).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(27).png

El archivo Solicitarproducto.php le permite al usuario con rol de supervisor poder comprar mas productos, muestra un formulario donde se seleccionara el producto a comprar y la cantidad de cajas a comprar de aqui se rediccionara a ConfirmarC.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(19).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(25).png

El archivo ConfirmarC.php es un formulario con la informacion para la compra de prodcutos, muestra el id de producto, nombre de producto y la cantidad a pagar por la compra de las cajas esta cantidad toma en cuenta un %10 menos del precio de producto individual para dejar un margen de ganancia al usuario, los datos se envian a Comprarproducto.php dentro de la carpeta logica que realizara todas las operaciones:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturascodigo/Captura%20de%20pantalla%20(20).png
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/capturaspagina/Captura%20de%20pantalla%20(26).png

