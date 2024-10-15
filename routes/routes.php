<?php

// Initialize Router  
use Core\Router;

$router = Router::createRoutes();
$router->setNamespace('\App\Controllers');

// define your routes here 
//===============================================================

$router->get('/','Home@index');

//===============================================================

//  define your 404 page handler :
$router->set404('Error@notFound');

//===============================================================

//And Fire in the hole!!
$router->run();

//===============================================================
