<?php
session_start();

use app\classes\Routes;
use app\classes\Uri;

require "../bootstrap.php";

$routes = [
	'/' => 'controllers/IndexController.php',	
	'/booking_store' => 'controllers/BookingController.php',
	'/sucesso' => 'controllers/IndexController.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);