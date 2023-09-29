<?php

namespace Core; 

use Illuminate\Database\Capsule\Manager as Capsule;
use Config\Database;

 
class Model {
 
        public function __construct() {

        $capsule = new Capsule();
        
        $db_config = new Database();
 

        foreach($db_config->configList() as $key =>$database_config){
              
            $capsule->addConnection($database_config,$key);

        }

        // Setup the Eloquent ORM… 
        $capsule->setAsGlobal(); 
        $capsule->bootEloquent();
}
 
}

 