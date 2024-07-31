<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->get('/', [Controller\Home::class, 'main']);

$router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
