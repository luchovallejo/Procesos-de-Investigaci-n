<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$u = new GrupoInvestigacion();
$u->id_Lider = "94939384";
$u->nombre_proyecto = "proyecot 1";
$u->investigador_id = "45643";

//$u->save();
//$total = @GrupoInvestigacion::count();
//echo "total: $total GrupoInvestigacion";

try{
    $u->save();
    $total = @GrupoInvestigacion::count();
    echo "Grupo de investigaciones ingresados";
    echo "Total: $total";
}
catch(Exception $error){
    $msj = $error->getMessage();
    if(strstr($msj, "Duplicate")){
        echo "Datos ya existentes";
    }
}

$grupoinvestigaciones = Investigador::all();
foreach ($u as $grupoinvestigaciones){
?>
IDENTIFICACION: <?= $u-> id_Lider ?><br>
NOMBRE DEL PROYECTO: <?= $u-> nombre_proyecto ?><br>
ID DE INVESTIGADOR/A: <?= $u-> investigador_id ?><br>
<?php
}
?>