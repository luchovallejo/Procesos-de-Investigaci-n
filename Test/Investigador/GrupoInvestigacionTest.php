<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$u = new GrupoInvestigacion();
$u->idlider = 64625372;
$u->nombreproyecto = "Analisis calificativos";
$u->investigadorid = 678863637;



/*$u->save();
$total = @GrupoInvestigacion::count();
echo "total: $total grupos";*/

try{
    $u->save();
    $total = @GrupoInvestigacion::count();
    echo "Grupos guardados en ";
    echo "total : $total grupos de investigaciones han sido guardados";
}
catch(Exception $error){
    $msj = $error->getMessage();
    if(strstr($msj, "Duplicate")){
        echo "Grupo de investigacion ya existe";
    }
}


?>