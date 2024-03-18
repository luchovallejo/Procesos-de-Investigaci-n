<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$g = new GrupoInvestigacion();
$g->id_Lider = 8384949;
$g->nombre_proyecto = "proyecto 2";
$g->investigador_id = 678863637;

//$u->save();
//$total = @GrupoInvestigacion::count();
//echo "total: $total GrupoInvestigacion";

try{
    $g->save();
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

$grupoinvestigaciones = GrupoInvestigacion::all();
foreach ($grupoinvestigaciones as $i => $u){
?>
# <?= $i ?><br>
IDENTIFICACION: <?= $g-> id_Lider ?><br>
NOMBRE DEL PROYECTO: <?= $g-> nombre_proyecto ?><br>
ID DE INVESTIGADOR/A: <?= $g-> investigador_id ?><br>
<hr>
<?php
}
?>