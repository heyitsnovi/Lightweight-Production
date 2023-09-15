<?php

namespace Core;

use Core\Constants;

class Twigified{

		private $loader;
		private $twigobject;

		public function __construct($twig_params=[]){

			$this->loader = new \Twig\Loader\FilesystemLoader(Constants::views_dir());
			$this->twigobject = new \Twig\Environment($this->loader, $twig_params);

		}

		public function view(){

			return $this->twigobject;
		}
}