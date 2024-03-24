<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$id = "334566";

try{
    $u = Investigador::find($id);
    echo "<b>IDENTIFICACION:</b> $u->id<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";

    $GrupoInvestigacion = $g->$GrupoInvestigacion;
    $numeroproyectos = count($GrupoInvestigacion);
    echo "<br>";
    echo "Proyectos: $numeroproyectos<br>";
    $nombre_de_proyectos = "No hay proyecto ganador";
    foreach($GrupoInvestigacion as $i => $g){
        echo "--------------------<br>";
        echo "Proyectos #".($i + 1)."<br>";
        echo "--------------------<br>";
        echo "<b>Identificacion lider del proyecto: </b>$g->idlider<br>";
        echo "<b>Nombre del proyecto: </b>$g->nombre_proyecto<br>";
        echo "<b>ID investigador: </b>$g->investigadorid<br>";
        $nombre_de_proyectos += $g->nombreproyecto;
    }
    echo "<h3><b>NOMBRE PROYECTO GANADOR: </b> $nombre_de_proyectos ";
}
catch(Exception $error){
    $msj = $error->getMessage();
}

