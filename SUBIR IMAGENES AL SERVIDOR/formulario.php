<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servidor GET Y POST</title>
  <link rel="stylesheet" href="style.css">
  <script src="anime.js"></script>
</head>

<body>
  <form action="server.php" method="post" enctype="multipart/form-data">
    <h1 class="animated pulse">IMAGEN</h1>

    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" placeholder="nombre" required>
    
    <label for="image">Imagen:</label>
    <input type="file" name="image" placeholder="image" required>

    <button class="animated pulse" type="submit">Enviar</button>

  </form>
</body>
</html>