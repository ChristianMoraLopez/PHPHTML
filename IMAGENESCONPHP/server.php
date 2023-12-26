<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'nombre' key is set in $_POST
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;

    // Check if the 'image' key is set in $_FILES
    $imagen = isset($_FILES['image']) ? $_FILES['image'] : null;

    echo "Nombre: " . $nombre . "<br>";

    // Check if either 'nombre' or 'image' is not set
    if ($nombre === null || $imagen === null) {
        echo "Los campos 'nombre' e 'image' deben estar definidos.";
    } else {
        // Check if the file was uploaded without errors
        if ($imagen['error'] === UPLOAD_ERR_OK) {
            // Create the 'uploads' directory if it doesn't exist
            if (!is_dir('uploads')) {
                mkdir('uploads');
            }

            $uploadPath = 'uploads/' . basename($imagen['name']);
            
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($imagen['tmp_name'], $uploadPath)) {
                echo "Imagen subida con éxito: " . $uploadPath;
                echo "<pre>"; // Add a semicolon here
                var_dump($_FILES);
                echo "</pre>";
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "Error en la carga de la imagen: " . $imagen['error'];
        }
    }
}
?>
