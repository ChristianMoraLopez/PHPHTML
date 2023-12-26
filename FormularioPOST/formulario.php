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
  <form action="./server.php" method="post">
    <h1 class="animated pulse">Formulario de contacto</h1>

    <input type="text" name="nombre" placeholder="Nombre" required>
    <span class="fa fa-user"></span>

    <input type="text" name="apellido" placeholder="Apellido" required>
    <span class="fa fa-users"></span>

    <button class="animated pulse" type="submit">Enviar</button>
  </form>
</body>
</html>