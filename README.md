# ProyectoParcial3
Esta es una pagina web basada en una tienda conectada con una base de datos de phpmyadmin, como proyecto final de programacion web, acontinuacion se mostrara su funcionamiento:
Aqui se muestra la estructura de la pagina, la carpeta pagina contiene las paginas con las que interactua el usuario, la carpeta logica contiene la mayoriade operciones que se realizan, la carpeta estilo contiene un archivo .css que tiene el diseño de la pagina
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(3).png

El archivo Index.html es el login donde los usuarios Ingresan a la pagina

Si no se tiene una cuenta el login tiene una opcion que te manda al archivo Registro.thml donde se ingresara un nuevo usuario con rol de vendedor

El archivo Validar.php realiza el ingreso de sesion o el registro de un nuevo usuario:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(9).png

primero veremos la carpeta logica:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(4).png

El archivo Conexion.php, contiene la conexion con las base de datos, usando el usario por defecto y contraseña por defecto, el archivo se manda a llamar desde los otros archivos:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(6).png

El archivo Validausario.php valida las variables de sesion en cada pagina y diferencia el tipo de rol de de usuario ya sea vendedor o supervisor, de igual mandera se manda llamar en cada pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(7).png

El archivo funciones.php contiene una clase con todas las funciones que realizan peticiones la base de datos, de igual manera las funciones son llamadas desde los otros archivos que las ocupan: 
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(8).png

El archivo Transaccion.php realiza varias operaciones, realiza una venta, genera la factura, inserta un producto vendido, descuenta la mercancia de la base de datos tanto productos individuales como cajas, los datos provienen de al archivo ConfirmarV.php de la carpeta pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(10).png

El archico Comprarproducto.php realiza las operaciones para comprar mercancia esta operacion solo la puede hacer un usuario con rol de supervisor, realiza la transferencia, la solicitud de transferancia y suma los productos comprados, los datos provienen del archivo ConfirmarC.php de la carpeta pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(12).png

Ahora la carpeta pagina donde se encuntran los archivos donde el usuario va interactuar:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(5).png


El archivo Almacen.php muestra una tabla con todos los productos disponibles, cuenta con un boton con el que se podra vender, lo redireccionara al archivo Vender.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(13).png

El archivo Vender es un formulario donde te muestra el precio individual y la cantidad de producto disponible segun el prodcuto seleccionado en Almacen.php, de igual manera se pediran los datos del comprador y la cantidad de producto individual a vender, aun asi el producto se descontara tanto en cantidad de cajas como producto individual tras esto redireccionara a ConfirmarV.php:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(14).png

El archivo ConfirmarV.php nuevamente se trata de un formulario sin embargo este no se puede editar, aqui se muestran todos los datos para la confirmacion de la venta
se muestran la ganancia que se optendra aplicando el repestivo descuento por IVA segun la cantidad de productos que se vendera, el usuario podra confirmar o cnacelar la venta, los datos se enviaran a Transaccion.php dentro la carpeta logica para reliazar las operaciones necesarias:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(15).png

