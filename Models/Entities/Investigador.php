<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/config.php";

class Investigador extends ActiveRecord\Model {
    public static $primary_key = "id_Investigador";
    public static $has_many = array(array("GrupoInvestigacion"));
    public static $table_name = 'investigadores';
}
