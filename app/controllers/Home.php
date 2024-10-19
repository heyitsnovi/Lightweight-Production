<?php

namespace App\Controllers;


use Core\Constants;
use Core\Basecontroller;
use Core\Helper;

class Home extends Basecontroller {

    public function __construct(){
         
    }

    public function index() {

        //Display the page in the browser
        $this->view('default', [
            'memory_usage'=> Constants::get_memory_usage(),
            'title'=> 'Home - LightWeight MVC'
        ]);

    }

}

