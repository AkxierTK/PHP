<?php
$msjError;
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
<?php if(!is_null($msjError)){
?> <p><?=$msjError?>
<?php
}
?>
    <form enctype="multipart/form-data" action="405subidaImagenM.php" method="POST">
        <p>
            <label for="ancho">Ancho:</label>
            <input type="number" name="ancho" value="400" required/>
        </p>
        <p>
            <label for="largo">Largo:</label>
            <input type="number" name="largo" value="600" required />
        </p>
        <p> Archivo: <input name="archivoEnviado" type="file" required/>
        </p>
        <input type="submit" name="btnSubir" value="Subir" />
    </form>
</body>

</html>