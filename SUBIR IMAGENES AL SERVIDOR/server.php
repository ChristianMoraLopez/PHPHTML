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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagen</title>
  <link rel="stylesheet" href="style.css">
  <script src="anime.js"></script>
</head>
<style>
    .circle-image {
      border-radius: 50%;
      border: 2px solid #000; /* Puedes cambiar el color del borde según tus preferencias */
      box-shadow: 2px 2px 5px #000; /* Puedes ajustar la sombra según tus preferencias */
      max-width: 100px; /* Ajusta el tamaño máximo del círculo según tus preferencias */
    }
  </style>
<body>

<?php if (isset($uploadPath)) : ?>
    <img class="circle-image" src="<?= $uploadPath ?>" alt="<?= $nombre?>">
  <?php endif; ?>
 </form>
</body>
</html>
