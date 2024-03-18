<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$id_Investigador = "12345678";

try{
    $u = Investigador::find($id_Investigador);
    echo "DATOS ACTUALES DEL INVESTIGADOR<br>";
    echo "--------------------<br>";
    echo "<b>IDENTIFICACION:</b> $u->id_Investigador<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";
  
    echo "<br>";
    
    echo "SE CAMBIA ID, NOMBRE, APELLIDO...<br>";

    $u->id_Investigador = "737828263";
    $u->nombre = "Camilia";
    $u->apellido = "Cruz";
    $u->telefono = "321456732";
    $u->save();

    echo "<br>";

    echo "DATOS ACTUAlIZADOS DEL INVESTIGADOR<br>";
    echo "--------------------<br>";
    echo "<b>IDENTIFICACION:</b> $u->id_Investigador<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";
    echo "<br>";
}
catch(Exception $error){
    $msj = $error->getMessage();
}