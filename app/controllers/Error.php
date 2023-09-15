<?php

namespace App\Controllers;

use Core\View;
use Core\Constants;

class Error{


	public function notFound(){

		new View('errors/404',['title'=>'Error 404','memory_usage'=> Constants::get_memory_usage()]);
		
	}
}