<?php

namespace App\Controllers;

use Core\View;
use Core\Constants;
use Core\Renderer;

class Home {

    public function __construct(){
         
    }

    public function index() {

        //Display the page in the browser
        new View('default', [
            'memory_usage'=> Constants::get_memory_usage(),
            'title'=> 'Home - LightWeight MVC'
        ]);

    }

}

