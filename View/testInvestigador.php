<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$u = new Investigador();
$u-> id_Investigador = "62627";
$u-> nombre = "Luis";
$u-> apellido = "Rodriguez";
$u-> telefono = "832622";

//$u->save();
//$total = @Investigador::count();
//echo "total: $total Investigadores";

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
}
