<?php

namespace Core;	

use Core\Model;

class Boot {

	public function __construct(){

		new Model();
		
	}

}
	new Boot();
?>