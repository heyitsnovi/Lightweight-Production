<?php

namespace Core;

use Core\View;
use Core\Twigified;
use Rakit\Validation\Validator;
use Core\Helper;
use Core\Constants;

class Basecontroller{

    private $view;
    private $twig_view;

    public function __construct(){
    	
    }

    public function view($view_file , $data=[] ,$http_headers =[]){
        
        $this->view = new View($view_file,$data);
    }

    public function twig_view($template , $data ,$twig_config = []){

        $this->twig_view = new Twigified($twig_config);

        echo $this->twig_view->view()->render($template,$data);
    }

    public function form_validation(){

        return new Validator();

    }

}