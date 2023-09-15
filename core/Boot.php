<?php

namespace Core;	

use Core\Model;

class Boot {

	public function __construct(){

		self::initializeSession();
		self::cachePostData();
		new Model();
		
	}

	protected static function initializeSession(){

		if(session_status()	===	PHP_SESSION_NONE){

			session_start();
		}
	}

	protected static function cachePostData(){

		$request_method = $_SERVER['REQUEST_METHOD'];

			if($request_method == 'POST'){

				foreach($_POST as $key => $value){

					$_SESSION['post_data_'.$key] = $value;
						 
				}

			}else{

				foreach ($_SESSION as $key=>$val) {
	 
				  if (strpos($key, 'post_data_') === 0) {
				  
				  	  unset($_SESSION[$key]);

				  }

				}
			}
			
	}

}
	new Boot();
?>