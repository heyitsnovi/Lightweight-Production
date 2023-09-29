<?php

namespace Core;

use Core\Constants;

class View {

	private  $data = [];
	private  $page_vars = [];


	public  function __construct($view, $data = [], $http_headers = []){

		try {
			
				if($data != NULL) {

					foreach ($data as $key => $value) {
						
						$this->page_vars[$key] = $value;
					}
				}

				if(file_exists(Constants::views_dir().'/'. $view .'.php')){
					
					extract($this->page_vars);
					ob_start();
					require_once Constants::views_dir().'/'. $view .'.php';
					echo ob_get_clean();

				}else{
					
					http_response_code(500);
					die('<span style="color:red;">View File : Views/ '. $view .'.php was not found </span>');

				}


		}catch (Exception $e) { 

			echo $e->getMessage();
		}
	
	}
}