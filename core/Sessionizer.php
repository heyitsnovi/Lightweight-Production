<?php

namespace Core;

class Sessionizer {

	private $session;

	public function __construct(){

		$config = [
		    'name' => 'lightweight_app',
		];

		$this->session = new \Odan\Session\PhpSession($config);

		if(session_status() == PHP_SESSION_NONE){

			$this->session->start();

		}

	 
	}

	public function set_session($session_key,$session_value){

 		$this->session->set($session_key,$session_value);
	}


	public function get_session($session_key){

		return $this->session->get($session_key);
	}

	public function set_flash($session_key,$session_value){

	 	return $this->session->getFlash()->add($session_key, $session_value);
	}

	public   function get_flash($session_key){

		return $this->session->getFlash()->get($session_key);
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

		 return $this->session->has('foo');
	}

}