<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

$id_Investigador = "12345678";

try{
    $u = Investigador::find($id_Investigador);
    echo "<b>IDENTIFICACION:</b> $u->id_Investigador<br>";
    echo "<b>NOMBRE:</b> $u->nombre<br>";
    echo "<b>APELLIDO:</b> $u->apellido<br>";
    echo "<b>TELEFONO:</b> $u->telefono<br>";

    $GrupoInvestigacion = $g->$GrupoInvestigacion;
    $numero_proyectos = count($GrupoInvestigacion);
    echo "<br>";
    echo "Proyectos: $numero_proyectos<br>";
    $nombre_de_proyectos = "No hay proyecto ganador";
    foreach($GrupoInvestigacion as $i => $g){
        echo "--------------------<br>";
        echo "Proyectos #".($i + 1)."<br>";
        echo "--------------------<br>";
        echo "<b>Identificacion lider del proyecto: </b>$g->id_Lider<br>";
        echo "<b>Nombre del proyecto: </b>$g->nombre_proyecto<br>";
        echo "<b>ID investigador: </b>$g->investigador_id<br>";
        $nombre_de_proyectos += $g->nombre_proyecto;
    }
    echo "<h3><b>NOMBRE PROYECTO GANADOR: </b> $nombre_de_proyectos ";
}
catch(Exception $error){
    $msj = $error->getMessage();
}

