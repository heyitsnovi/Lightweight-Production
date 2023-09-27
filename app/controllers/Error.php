<?php

namespace App\Controllers;

use Core\Constants;
use Core\Basecontroller;

class Error extends Basecontroller{


	public function notFound(){

		$this->view('errors/404',['title'=>'Error 404','memory_usage'=> Constants::get_memory_usage()]);
		
	}
}