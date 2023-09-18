<?php
namespace Core;
use Core\Constants;
class Url {

	public  function base_url($ext = ''){

		 $config = parse_ini_file(Constants::root_path().'.env');
		
		return  $config['PROJECT_BASEURL'] . $ext;
		 
	}


	public function current_url(){

		$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';

		return $protocol.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  
	}
}