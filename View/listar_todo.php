<?php
// Obtenemos el mensaje enviado por el controlador
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";


$msj = @$_REQUEST["msj"];
$investigadores = @$_SESSION["investigadores.all"];
$investigadores = unserialize($investigadores);

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
        <h1>RESPORTE DE INVESTIGADORES</i>
        <hr>
        <?php
        if($investigadores == null || count ($investigadores) <= 0){
           ?>
            <span style= " color: #900D40; background-color: #FAD7CE;">
             NO EXITE INVESTIGADORES REGISTRADOS
             </span>
         <?php    
        }else{
          ?>
          <fieldset style= "width: 70%; ">
          <legend>INFORMACION DE LOS INVESTIGADORES:</legend>
          <table>
            <tr>
                <th>#</th>
                <th>ID_INVESTIGADOR</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
            </tr>
            <?php
            foreach($investigadores as $i => $u){
            ?>    
                <tr style="text-align: left;">
                <td> <?= ($i + 1) ?> </td>
                <td> <?= $u-> id ?> </td>
                <td> <?= $u-> nombre ?> </td>            
                </tr>
            <?php    
            }
            ?>
          </table>
          </fieldset>
          <?php  
        }
        ?>
        <span style="color: red;"><?= ($msj != NULL || isset($msj)) ? $msj : ""?></span>
    </center>
</body>
</html>