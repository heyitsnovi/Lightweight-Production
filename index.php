<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Asia/Manila');

if(file_exists('vendor/autoload.php')){

	require_once __DIR__.'/vendor/autoload.php';
	require_once __DIR__.'/core/Boot.php';
	require_once __DIR__.'/routes/routes.php';

}else{

	die('vendor folder does not exists. please run composer install');
}
