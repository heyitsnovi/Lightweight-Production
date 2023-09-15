<?php

namespace Core;

class Router{

	protected  static $routerInstance ;


	public static function createRoutes(){

		self::$routerInstance = new \Bramus\Router\Router();
		return self::$routerInstance;
	}

}