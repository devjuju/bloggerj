<?php

	// to display the error message
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . 'vendor/autoload.php';

require('src/core/router.php');

use App\Core\Router;
$router = new Router();
$router->run();