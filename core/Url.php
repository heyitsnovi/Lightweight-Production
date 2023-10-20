<?php
namespace Core;
use Core\Constants;
class Url {

	public  function base_url($ext = ''){

		$config = parse_ini_file(Constants::root_path().'.env');
		
		if(isset($config['PROJECT_BASEURL'])){

			if($config['PROJECT_BASEURL']!==''){
				
				return  $config['PROJECT_BASEURL'] . $ext;

			}else{

				$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';

				$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';

				if(isset($_SERVER['HTTP_HOST'])){
		
					return $protocol.'://'.$_SERVER['HTTP_HOST'].$basepath;
				
				}else{

					return $protocol.'://'.$_SERVER['SERVER_NAME'].$basepath;
				}
				
			}
		}
		
		 
	}


	public function current_url(){

		$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';

		if(isset($_SERVER['HTTP_HOST'])){

			return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		}

		return $protocol.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  
	}
}