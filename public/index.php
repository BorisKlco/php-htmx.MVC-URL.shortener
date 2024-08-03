<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../views/');

$app = new App();

$app->route()->get('/', [Controller\Home::class, 'main']);

echo $app->response();
