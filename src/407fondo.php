<?php
if (!isset($_COOKIE['fondo'])) {
    setcookie('fondo', "white", time() + 86.400);
} else {
    $fondo= $_POST["colores"];
    setcookie('fondo',$fondo);
    echo "Ahora la página es de color " . $_COOKIE['fondo'];
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

<body <?php echo  "style=background-color:".$_COOKIE['fondo']; ?>>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="colores">Elige el color de fondo:</label>
        <select name="colores">
            <option value="red">Rojo</option>

            <option value="blue">Azul</option>

            <option value="green">Verde</option>
        </select>
        <input type="submit" name="enviar" value="enviar" />
    </form>
</body>

</html>