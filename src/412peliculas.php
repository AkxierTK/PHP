<?php
  if(!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
   die("Error - debe <a href='410index.php'>identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de películas</h1>
    <ul>
        <li>Spiderman No Way Home</li>
        <li>Imparable</li>
        <li>Steve Jobs</li>
        <li>Frozen</li>
    </ul>
    <a href="413logout.php">Cerrar Sesión</a>
</body>
</html>