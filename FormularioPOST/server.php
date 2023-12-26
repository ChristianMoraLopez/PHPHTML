<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];



//vamos a validar si el nombre y el apellido estan vacios
if(empty($nombre) || empty($apellido)){
    echo "<h1>El nombre es: $nombre</h1>";
    echo "<h1>El apellido es: $apellido</h1>";
}else{
    echo "<h1>El nombre y el apellido no estan vacios</h1>";
    }



?>