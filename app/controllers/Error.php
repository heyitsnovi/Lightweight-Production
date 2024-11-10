<?php

namespace App\Controllers;

use Core\Constants;
use Core\BaseController;

class Error extends BaseController{

	public function notFound(){
		
		 throw new \Exception('Page Not Found',404);
		
	}
}