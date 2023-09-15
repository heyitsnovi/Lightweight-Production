<?php

namespace Core;

use Core\Constants;

class View {

	private   $data = [];
	private  $pageVars = [];


	public  function __construct($view, $data = [], $http_headers = []){

		try {
			
				if($data != NULL) {

					foreach ($data as $key => $value) {
						
						$this->pageVars[$key] = $value;
					}
				}

				if(file_exists(Constants::views_dir().'/'. $view .'.php')){
					
					extract($this->pageVars);
					ob_start();
					require_once Constants::views_dir().'/'. $view .'.php';
					echo ob_get_clean();

				}else{

					die('<span style="color:red;">View File : Views/ '. $view .'.php was not found </span>');

				}


		}catch (Exception $e) { 

			echo $e->getMessage();
		}
	
	}
}