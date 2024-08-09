<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/path.php';

$app = new App();

$app->route()->get('/', [Controller\Home::class, 'main']);
$app->route()->get('/stats', [Controller\Home::class, 'stats']);

echo $app->response();
