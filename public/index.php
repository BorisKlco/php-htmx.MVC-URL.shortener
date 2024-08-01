<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../views/');

$router = new Router();

$router->get('/', [Controller\Home::class, 'main']);

echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
