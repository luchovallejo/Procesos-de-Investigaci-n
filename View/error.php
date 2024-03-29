<?php
// Obtenemos el mensaje enviado por el controlador
$msj = @$_REQUEST["msj"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Mensaje de error</i>
        <hr>
        <!-- SE MUESTRA MENSAJE ENVIADO POR EL CONTROLADOR -->
        <span style= " color: #900D40; background-color: #FAD7CE;">
        <?= ($msj != NULL || isset($msj)) ? $msj : "" ?>
        </span>
    </center>
</body>

</html>