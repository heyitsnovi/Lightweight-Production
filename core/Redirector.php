<?php

namespace Core;

use Core\Sessionizer;
use Rakit\Validation\Validator;
use Core\Url;

class Redirector{

	public function redirect($uri = '', $method = 'auto', $code = NULL) {
		if (!preg_match('#^(\w+:)?//#i', $uri)) {
			$uri = base_url($uri);
		}
	
		if ($method === 'auto' && isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== false) {
			$method = 'refresh';
		}
		elseif ($method !== 'refresh' && (empty($code) or !is_numeric($code))) {
			if (isset($_SERVER['SERVER_PROTOCOL'], $_SERVER['REQUEST_METHOD']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') {
				$code = ($_SERVER['REQUEST_METHOD'] !== 'GET') ? 303 : 307;
			}
			else {
				$code = 302;
			}
		}
	
		switch ($method) {
			case 'refresh':
				header('Refresh:0;url=' . $uri);
			break;
			default:
				header('Location: ' . $uri, true, $code);
			break;
		}
		exit;
	}


	public  function redirectWithErrors($url,$errors = []){

		Sessionizer::set_flash('lightweight_form_errors',is_object($errors) ? $errors->toArray() : []);
		header('location:'.$url);
		exit;
	
	}

}