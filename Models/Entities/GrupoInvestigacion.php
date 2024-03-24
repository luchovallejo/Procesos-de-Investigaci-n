<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/config.php";

class GrupoInvestigacion extends ActiveRecord\Model {
    //public static $primary_key = "idlider";
    //public static $has_many = array(array("Investigador"));
    public static $table_name = "grupoinvestigacions";

}
