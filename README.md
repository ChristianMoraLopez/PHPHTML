 
##Repositorio de Ejemplos de PHP
Este repositorio contiene varios ejemplos de scripts en PHP para diferentes casos de uso. A continuación, se describen brevemente los archivos disponibles:

##Formulario GET
El archivo formulario_get.php contiene un formulario HTML que utiliza el método GET para enviar datos a un script PHP (server.php). El script PHP recibe los datos (nombre y apellido) y realiza una validación simple para verificar si ambos campos están definidos.

##Formulario POST
El archivo formulario_post.php es similar al formulario GET, pero utiliza el método POST para enviar datos al mismo script PHP (server.php). El script realiza la misma validación que en el ejemplo anterior.

##Formulario con Subida de Imagen
En el archivo formulario_imagen.php, se presenta un formulario que permite la carga de una imagen. El formulario utiliza el método POST y el atributo enctype="multipart/form-data" para permitir la carga de archivos. El script PHP (server.php) maneja la subida de la imagen y realiza la validación correspondiente.

El directorio uploads se crea dinámicamente si no existe, y la imagen se guarda en este directorio.

Nota: Asegúrate de que el directorio uploads tenga los permisos adecuados para la escritura.
