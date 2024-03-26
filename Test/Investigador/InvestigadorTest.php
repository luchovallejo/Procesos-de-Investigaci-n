<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$u = new Investigador();
$u->id = 29262836;
$u->nombre = "Luz Elena";
$u->apellido = "Montes";
$u->telefono = 637252735;


/*$u->save();
$total = @Investigador::count();
echo "total: $total Investigadores";*/

try{
    $u->save();
    $total = @Investigador::count();
    echo "investigadores guardados ";
    echo "total: $total Investigadores";
}
catch(Exception $error){
    $msj = $error->getMessage();
    if(strstr($msj, "Duplicate")){
        echo "el investigador ya existe";
    }
}


?>