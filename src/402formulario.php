<?php
$nombre = $_GET["nombre"];
$email = $_GET["email"];
$url = $_GET["url"];
$sexo = $_GET["sexo"];
$familia = $_GET["familia"];
$aficiones = $_GET["aficiones"];
$comida = $_GET["comida"];
$tabla = "<table><tr><td>Nombre</td><td>email</td><td>url</td><td>sexo</td><td>familia</td><td>aficiones</td><td>comida</td></tr><tr>";
$tabla .= "<td>" . $nombre . "</td><td>" . $email . "</td><td>" . $url . "</td><td>" . $sexo . "</td><td>" . $familia . "</td><td>";
foreach($aficiones as $aficion){
    $tabla.=$aficion.",";
}
$tabla.="</td><td>";
foreach($acomida as $com){
    $tabla.=$com.",";
}
$tabla.="</td></tr></table>";

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
    <?php echo $tabla ?>
</body>

</html>