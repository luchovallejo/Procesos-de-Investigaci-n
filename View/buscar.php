<?php
// Obtenemos el mensaje enviado por el controlador
session_start();

require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$msj = @$_REQUEST["msj"];
$u = @$_SESSION["investigador.find"];
$u = unserialize($u);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJEMPLO CRUD PHP ORM</title>
</head>

<body>
    <center>
        <h1>BUSCAR INVESTIGADOR</i>
        <hr>
        <!-- EL FORMULARIO HTML -->
        <from action= "../Controllers/InvestigadorController.php" method="POST">
            <table>
                <tr>
                    <th style="text-align: right">ID:</th>
                    <td><input type="number" id="id" name="id" required placeholder="Digita ID investigador(a)"></td>
                </tr>
                <tr>
                    <th style="text-align: right">NOMBRE:</th>
                    <td><input type="text" id="nombre" name="nombre" required placeholder="Digita nombre"></td>
                </tr>
                <tr>
                    <th style="text-align: right">APELLIDO:</th>
                    <td><input type="text" id="apellido" name="apellido" required placeholder="Digita apellido"></td>
                </tr>
                <tr>
                    <th style="text-align: right">TELEFONO:</th>
                    <td><input type="number" id="tlf" name="tlf" required placeholder="Digita numero telefonico"></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">
                    <input type="reset" id="limpiar" value="Limpiar">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" id="accion" name="accion" value="Guardar">
                    </td>
                </tr>
            </table>
        </from>
        <span style="color: red;"><?= ($msj != NULL || isset($msj)) ? $msj : ""?></span>
    </center>
</body>
</html>
