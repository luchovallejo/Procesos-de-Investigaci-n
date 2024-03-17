<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/config.php";

class GrupoInvestigacion extends ActiveRecord\Model {
    public static $primary_key = "id_Lider";
    public static $belongs_to = array(array("Investigador"));
    public static $table_name = 'GrupoInvestigaciones';
}
