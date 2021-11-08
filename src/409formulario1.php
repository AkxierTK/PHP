<?php
session_start();
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
    <form action="409formulario2.php" method="POST">
        <p><label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" id="nombre" value="Aitor Tilla"  require/>
        </p>
        
        <p> <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" value="aitor@profephp.com"  require/>
        </p>
        <p> <label for="URL">URL:</label>
            <input type="url" name="url" id="url" value="https://www.youtube.com/"  require/>
        </p>
        <p> <label for="sexo">Género:</label>
            <input type="radio" name="sexo" id="sexo" value="Femenino"  />F
            <input type="radio" name="sexo" id="sexo" value="Masculino" />M
        </p>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
</body>

</html>