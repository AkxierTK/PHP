<?php
$nombre = $_GET["nombre"];
$email = $_GET["email"];
if(!filter_var($_GET["email"],FILTER_VALIDATE_EMAIL)){
    $email="email incorrecto";
}
$url = $_GET["url"];
if(!filter_var($_GET["url"],FILTER_VALIDATE_URL)){
    $email="URL incorrecto";
}
$sexo = $_GET["sexo"];
if($sexo!="F" OR $sexo!="M"){
    $sexo="Género incorrecto";
}
$familia = $_GET["familia"];
if(!filter_var($_GET["familia"],FILTER_SANITIZE_NUMBER_INT)){
    $famlia="Familia incorrecta";
}
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