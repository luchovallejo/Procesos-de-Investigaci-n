<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$u = new Investigador();
$u->id_Investigador = 12345678;
$u->nombre = "Alejandra";
$u->apellido = "Jimenez Martinez";
$u->telefono = 7383657383;
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

//$u->save();
//$total = @Investigador::count();
//echo "total: $total Investigadores";

$investigadores = Investigador::all();
foreach ($u as $investigadores){
?>
IDENTIFICACION: <?= $u-> id_Investigador ?><br>
NOMBRE: <?= $u-> nombre ?><br>
APELLIDO: <?= $u-> apellido ?><br>
TELEFONO: <?= $u-> telefono ?><br>
<?php
}
?>