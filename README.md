# ProyectoParcial3
Esta es una pagina web basada en una tienda conectada con una base de datos de phpmyadmin, como proyecto final de programacion web, acontinuacion se mostrara su funcionamiento:
Aqui se muestra la estructura de la pagina, la carpeta pagina contiene las paginas con las que interactua el usuario, la carpeta logica contiene la mayoriade operciones que se realizan, la carpeta estilo contiene un archivo .css que tiene el diseño de la pagina
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(3).png

El archivo Index es el login donde los usuarios Ingresan a la pagina

Si no se tiene una cuenta el login tiene una opcion que te manda al archivo Registro donde se ingresara un nuevo usuario con rol de vendedor

El archivo Validar realiza el ingreso de sesion o el registro de un nuevo usuario:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(9).png

primero veremos la carpeta logica:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(4).png

El archivo conexion, contiene la conexion con las base de datos, usando el usario por defecto y contraseña por defecto, el archivo se manda a llamar desde los otros archivos:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(6).png

El archivo validausario valida las variables de sesion en cada pagina y diferencia el tipo de rol de vendedor del supervisor de cada usuario, de igual mandera se manda llamar en cada pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(7).png

El archivo funciones contiene una clase con todas las funciones que realizan peticiones la base de datos, de igual manera las funciones son llamadas desde los otros archivos que la ocupan: 
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(8).png

