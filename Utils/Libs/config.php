<?php
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Utils/Libs/orm/ActiveRecord.php";
ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models");
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:root@localhost/investigacioneducativa',
       //'test' => 'mysql://username:password@localhost/test_database_name',
       //'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});