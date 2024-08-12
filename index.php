<?php
require('src/core/router.php');
require "vendor/autoload.php";
use App\Core\Router;
$router = new Router();
$router->run();