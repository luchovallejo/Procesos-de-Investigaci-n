<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/config.php";

class Investigador extends ActiveRecord\Model {
    public static $primary_key = "id_Investigador";
    public static $belongs_to = array(array("GrupoInvestigacion"));
    public static $table_name = "investigadores";

    public $id_Investigador;
    public $nombre;
    public $apellido;
    public $telefono;
}
