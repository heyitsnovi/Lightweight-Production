<?php

namespace Core;

use Core\View;
use Core\Twigified;
use Rakit\Validation\Validator;
use Core\Helper;
use Core\Constants;

class BaseController{

    private $view;
    private $twig_view;
    private $constants;
 

    public function __construct(){
    
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

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

    public function constantInstance(){

        return new Constants();
    }

    public function getMemoryUsage(){

            $constants = new Constants();

            return $constants::get_memory_usage();
    }

}