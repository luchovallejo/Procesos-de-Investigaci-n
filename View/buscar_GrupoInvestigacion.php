<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$id_Lider = 1;

try{
    $g = GrupoInvestigacion::find($id_Lider);
    echo "<b>Identificacion lider del proyecto: </b>$g->id_Lider<br>";
    echo "<b>Nombre del proyecto: </b>$g->nombre_proyecto<br>";
    echo "<b>ID investigador: </b>$g->investigador_id<br>";

    $u = $g->investigador;
    echo "--------------------<br>";
    echo "Investigador <br>";
    echo "--------------------<br>";
    echo "<b>IDENTIFICACION:</b> $u->id_Investigador<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";
}
catch(Exception $error){
    $msj = $error->getMessage();
}
