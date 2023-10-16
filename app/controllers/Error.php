<?php

namespace App\Controllers;

use Core\Constants;
use Core\Basecontroller;

class Error extends Basecontroller{


	public function notFound(){
		
		http_response_code(404);
		$this->view('errors/404',['title'=>'Error 404','memory_usage'=> Constants::get_memory_usage()]);
		
	}
}