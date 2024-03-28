<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$id = "334566";

try{

    $lista_objetos_investigadores = Investigador::all();
    $cuenta_investigadores = count($lista_objetos_investigadores);
    echo "<h3><b>Total investigadores: </b>$cuenta_investigadores</h3><br><br>";
    echo "REPORTE INVESTIGADORES<br>";
    echo "============================<br>";

    foreach($lista_objetos_investigadores as $i => $u){
    echo "INVESTIGADOR #" . ($i+1) . "<br>";
    echo "--------------------<br>";
    echo "<b>IDENTIFICACION:</b> $u->id<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";
    echo "<br><br>";
    }

    echo "<h3>ELIMINAMOS EL INVESTIGADOR CON ID 29262836</h3><br>";

    Investigador::find("29262836")->delete();

    $lista_objetos_investigadores = Investigador::all();
    $cuenta_investigadores = count($lista_objetos_investigadores);
    echo "<h3><b>Total investigadores: </b>$cuenta_investigadores</h3><br><br>";
    echo "REPORTE NUEVO INVESTIGADORES<br>";
    echo "============================<br>";
    foreach($lista_objetos_investigadores as $i => $u){
        echo "INVESTIGADOR #" . ($i+1) . "<br>";
        echo "---------------------------------_<br>";
        echo "<b>IDENTIFICACION:</b> $u->id<br>";
        echo "<b>NOMBRE:</b> $u->nombre<br>";
        echo "<b>APELLIDO:</b> $u->apellido<br>";
        echo "<b>TELEFONO:</b> $u->telefono<br>";
        echo "<br><br>";
    }
}
catch(Exception $error){
    echo  $error->getMessage();
}