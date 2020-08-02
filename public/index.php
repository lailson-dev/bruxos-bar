<?php

use app\classes\Routes;
use app\classes\Uri;

require "../bootstrap.php";

$routes = [
	'/' => 'controllers/IndexController.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);