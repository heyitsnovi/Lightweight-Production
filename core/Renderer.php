<?php

namespace Core;

class Renderer {

    private $twig_obj = null;

    public function __construct($config=[]){

        $loader = new \Twig\Loader\FilesystemLoader('././app/views/');
        $this->twig_obj = new \Twig\Environment($loader, [
            'cache' =>  isset($config['cache']) ? $config['cache'] : false,
            'auto_reload' => isset( $config['auto_reload']) ?  $config['auto_reload'] : true
        ]);
    
    }

	public function compile(){
        return $this->twig_obj;
	}
}