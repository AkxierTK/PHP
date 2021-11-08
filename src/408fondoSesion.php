<?php
session_start(); // inicializamos
$_SESSION["colores"] = $_POST["colores"]; // asignación
$fondo = $_SESSION["colores"]; // recuperación
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  <?php echo  "style=background-color:".$fondo?>>
    <a href="408fondo.php">Vuelve a elegir color</a>
    <br>
    <a href="408cerrarSesion.php">Cierra sesión y vuelve a empezar</a>
</body>
</html>