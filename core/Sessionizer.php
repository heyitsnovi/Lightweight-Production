<?php

namespace Core;

use Symfony\Component\HttpFoundation\Session\Session;

class Sessionizer {

	private $session;

	public function __construct(){

		$this->session = new Session();
		$this->session->start();
	 
	}

	public function set_session($session_key,$session_value){

 	 	$this->session->set($session_key, $session_value);

	}


	public function get_session($session_key){

			return $this->session->get($session_key);
	 
	}

	public function set_flash($session_key,$session_value){

		$flashes = $this->session->getFlashBag();

		$flashes->add(
			    $session_key,
			   	$session_value
			);
	 	 
	}

	public function get_flash($session_key , $index=0){

		$flash_value  = $this->session->getFlashBag()->get($session_key, []);

		if(isset($flash_value[$index])){

			return $flash_value[$index];

		}else{

			return NULL;

		}
		 
	}


	public function input_value($key){

		if(isset($_SESSION['post_data_'.$key])){

			$val = $_SESSION['post_data_'.$key];

			return $val;

		}else{

			return NULL;
		}

	}

	public function hasSession($key){

		  return  $this->session->has($key);
	 
	}

}