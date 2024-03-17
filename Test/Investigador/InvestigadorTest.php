<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";
$u = new Investigador();
$u-> id_Investigador = "45643";
$u->nombre = "Luis Angel";
$u->apellido = "Vallejo Rodriguez";
$u->telefono = 854585;

$u->save();
$total = @Investigador::count();
echo "total: $total Investigadores";

/*
try{
    $u->save();
    $total = @Investigador::count();
    echo "Datos Investigador ingresados";
    echo "Total: $total";
}
catch(Exception $error){
    $msj = $error->getMessage();
    if(strstr($msj, "Duplicate")){
        echo "Datos ya existentes";
    }
}*/