<?php
$tabla;
if ($_POST["enviar"] == "Enviar") {
    session_start();
$familia = $_POST["familia"];
if(!filter_var($_POST["familia"],FILTER_SANITIZE_NUMBER_INT)){
    $famlia="Familia incorrecta";
}
$aficiones=$_POST["aficiones"];
$comida=$_POST["comida"];
$_SESSION["aficiones"]=$familia;
$_SESSION["aficiones"]=$aficiones;
$_SESSION["comida"]=$comida;
$tabla="<table border='1'><tr>";
$tabla.="<td>Nombre</td><td>".$_SESSION["nombre"]."</td></tr>";
$tabla.="<tr><td>Email</td><td>".$_SESSION["email"]."</td></tr>";
$tabla.="<tr><td>URL</td><td>".$_SESSION["url"]."</td></tr>";
$tabla.="<tr><td>Sexo</td><td>".$_SESSION["sexo"]."</td></tr>";
$tabla.="<tr><td>Familia</td><td>".$familia."</td></tr>";
$tabla.="<tr><td>Aficiones</td><td>";
foreach($aficiones as $aficion){
    $tabla.=$aficion." ";
}
$tabla.="</td></tr><tr><tr><td>Comidas Favoritas</td><td>";
foreach($comida as $com){
    $tabla.=$com." ";
}
$tabla.="</td></tr></table>";
echo $tabla;
} else {
    header("Location: http:409formulario1.php");
}

?>