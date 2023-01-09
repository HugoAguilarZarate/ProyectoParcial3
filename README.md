# ProyectoParcial3
Esta es una pagina web basada en una tienda conectada con una base de datos de phpmyadmin, como proyecto final de programacion web, acontinuacion se mostrara su funcionamiento:
Aqui se muestra la estructura de la pagina, la carpeta pagina contiene las paginas con las que interactua el usuario, la carpeta logica contiene la mayoriade operciones que se realizan, la carpeta estilo contiene un archivo .css que tiene el diseño de la pagina
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(3).png

primero veremos la carpeta logica:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(4).png

El archivo conexion, contiene la conexion con las base de datos, usando el usario por defecto y contraseña por defecto, el archivo se manda a llamar desde los otros archivos:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(6).png

El archivo validausario valida las variables de sesion en cada pagina y diferencia el tipo de rol de vendedor del supervisor de cada usuario, de igual mandera se manda llamar en cada pagina:
https://github.com/HugoAguilarZarate/ProyectoParcial3/blob/main/Captura%20de%20pantalla%20(7).png

