<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/GrupoInvestigacion.php";

$u = new Investigador();
$u->id_Investigador = 678863637;
$u->nombre = "Fernanda";
$u->apellido = "De la Rosa";
$u->telefono = 378227273;


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
<hr>
<?php
}
?>