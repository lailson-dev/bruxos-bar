<?php
session_start();

use app\classes\Routes;
use app\classes\Uri;

require "../bootstrap.php";

$routes = [
	'/' => 'controllers/site/IndexController.php',	
	'/booking_store' => 'controllers/site/BookingController.php',
	'/sucesso' => 'controllers/site/IndexController.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);