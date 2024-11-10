<?php

namespace App\Controllers;

use Core\BaseController;

class Home extends BaseController {

   

    public function index() {
        //Display the page in the browser
        $this->view('default', [
     
            'title'=> 'Home - LightWeight MVC'
        ]);

    }

}

