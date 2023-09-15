<?php

namespace Core;

use Core\Sessionizer;
use Rakit\Validation\Validator;

class Redirector{

	public  function redirect($url){
		header('location:'.$url);
		exit;
	}

	public  function redirectWithErrors($url,$errors = []){

		Sessionizer::set_flash('lightweight_form_errors',is_object($errors) ? $errors->toArray() : []);
		header('location:'.$url);
		exit;
	
	}

}