<?php

use function PHPSTORM_META\type;

if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
    if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name']) && $_FILES['archivoEnviado']['type']=="image/jpeg") {
        // subido con éxito
        $largo=$_POST["largo"];
        $ancho=$_POST["ancho"];
        $nombre = $_FILES['archivoEnviado']['name'];
        move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./uploads/{$nombre}");
        echo "<p>Archivo $nombre subido con éxito</p>";
        echo "<p>Altura: ".$largo."px</p>";
        echo "<p>Ancho: ".$ancho."px</p>";
        echo "<img src='./uploads/".$nombre."'  width='".$ancho."px' height='".$largo."px'>";
    }else{
    $msjError="Error Imagen Incorrecta";
    include "405subidaImagen.php";
}
}