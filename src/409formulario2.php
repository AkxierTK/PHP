<?php
if ($_POST["enviar"] == "Enviar") {
    session_start();
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = "email incorrecto";
    }
    $url = $_POST["url"];
    if (!filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
        $email = "URL incorrecto";
    }
    $sexo = $_POST["sexo"];
    if ($sexo != "Femenino" or $sexo != "Masculino") {
        $sexo = "Género incorrecto";
    }
    $_SESSION["nombre"]=$nombre;
    $_SESSION["email"]=$email;
    $_SESSION["url"]=$url;
    $_SESSION["sexo"]=$sexo;
} else {
    header("Location: http:409formulario1.php");
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
    <form action="409formulario3.php" method="POST">
        <p> <label for="familia">Número de convivientes en el domicilio:</label>
            <input type="number" name="familia" id="familia" value="4" require/>
        </p>
        <p> <label for="aficiones[]">Aficiones:</label>
            <input type="checkbox" name="aficiones[]" id="aficiones[]" value="Leer" checked="checked" />Leer
            <input type="checkbox" name="aficiones[]" id="aficiones[]" value="Jugar" />Jugar
            <input type="checkbox" name="aficiones[]" id="aficiones[]" value="Programar" />Programar
            <input type="checkbox" name="aficiones[]" id="aficiones[]" value="Dormir" />Dormir
        </p>

        <p> <label for="comida[]">Menú favorito:</label>
            <select multiple name="comida[]" id="comida[]">
                <option value="Lasaña Boloñesa">Lasaña</option>
                <option value="Pasta carbonara con parmesano">Pasta carbonara</option>
                <option value="Hamburgesa del twins burguer">Hamburguesa</option>
                <option value="Pizza Vikinga">Pizza</option>
            </select>
        </p>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
</body>

</html>