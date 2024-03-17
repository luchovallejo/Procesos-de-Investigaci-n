<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/config.php";

class GrupoInvestigacion extends ActiveRecord\Model {
    public static $primary_key = "id_Lider";
    public static $has_many = array(array("Investigador"));
    public static $table_name = 'GrupoInvestigaciones';

    public $id_Lider;
    public $nombre_proyecto;
    public $investigador_id;
}
