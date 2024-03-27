<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$idlider = 1;

try{
    $u = GrupoInvestigacion::find($idlider);
    echo "<b>Identificacion lider del proyecto: </b>$g->idlider<br>";
    echo "<b>Nombre del proyecto: </b>$g->nombreproyecto<br>";
    echo "<b>ID investigador: </b>$g->investigadorid<br>";

    $u = $g->investigador;
    echo "--------------------<br>";
    echo "Investigador <br>";
    echo "--------------------<br>";
    echo "<b>IDENTIFICACION:</b> $u->id<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";
}
catch(Exception $error){
    $msj = $error->getMessage();
}
