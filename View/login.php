<?php
$msj = @$_REQUEST["msj"];
$u = @$_SESSION["investigador.find"];
$u = @unserialize($u);
if($u){
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJEMPLO CRUD PHP ORM</title>
    <link rel="stylesheet" href="procesoeducativo/View/css/estilos.css"></link>
</head>

<body>
    <center>
        <h1>BUSCAR INVESTIGADOR</i>
        <hr>
        <!-- EL FORMULARIO HTML -->
        <from action= "../../Controllers/InvestigadorController.php" method="POST">
            <fieldset style="width: 60%;"></fieldset>
            <legend>DATOS DE ACCESO:</legend>
            <table>
                <tr>
                    <th style="text-align: right">ID:</th>
                    <td><input type="number" id="id" name="id" required placeholder="Digita ID investigador(a)"></td>
                </tr>
                <tr>
                    <th style="text-align: right">NOMBRE:</th>
                    <td><input type="text" id="nombre" name="nombre" required placeholder="Digita nombre"></td>
                </tr>
                    <td colspan="2" style="text-align: right">
                    <input type="reset" id="limpiar" value="Limpiar">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" id="accion" name="accion" value="Login">
                    </td>
                </tr>
            </table>
        </from>
        <span style="color: red;"><?= ($msj != NULL || isset($msj)) ? $msj : ""?></span>
    </center>
</body>
</html>