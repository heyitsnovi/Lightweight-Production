<?php

namespace Core;

class Sessionizer {

	public function set_session($session_key,$session_value){

		if(!isset($_SESSION[$session_key])  OR $_SESSION[$session_key] === null){
			 
			$_SESSION[$session_key]	= $session_value;
			 
		}else{

			$_SESSION[$session_key]	= $session_value;
		}
	}


	public function get_session($session_key){

			if(isset($_SESSION[$session_key])){

				return $_SESSION[$session_key];
			
			}else{

				return NULL;
			}
	}

	public function set_flash($session_key,$session_value){

		if(!isset($_SESSION[$session_key]) OR $_SESSION[$session_key] === null){
			 $_SESSION[$session_key]	= $session_value;
		}else{
			 $_SESSION[$session_key]	= $session_value;
		}	
	}

	public   function get_flash($session_key){

		$flash_message = isset($_SESSION[$session_key]) ? $_SESSION[$session_key] : '';
		unset($_SESSION[$session_key]);
		return $flash_message;

	}


	public function input_value($key){

			if(isset($_SESSION['post_data_'.$key])){

				$val = $_SESSION['post_data_'.$key];

				return $val;

			}else{

				return NULL;
			}
	
	}

	 
}