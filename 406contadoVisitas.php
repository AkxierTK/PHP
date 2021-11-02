<?php

if(isset($msR)){
    echo $msR;
}
$accesosPagina = 0;
if (isset($_COOKIE['accesos'])) {
    $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
    setcookie('accesos', ++$accesosPagina); // le asignamos un valor
    echo "LLevas " . $_COOKIE["accesos"] . " accesos a la página";
} elseif(!isset($msR)){
    setcookie('accesos', 1);
    echo "Es tu primer acceso a la página!";
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
    <form action="406reseteoVisitas.php" method="POST">
        <p>Para resetear el contador pulsa el botón</p>
        <input type="submit" name="enviar" value="enviar" />
    </form>
</body>

</html>