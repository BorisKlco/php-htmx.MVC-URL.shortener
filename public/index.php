<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/path.php';

// $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
// $dotenv->load();

$app = new App();

$app->route()->get('/', [Controller\Home::class, 'index']);
$app->route()->get('i', [Controller\Home::class, 'link']);
$app->route()->get('stats', [Controller\Stats::class, 'index']);
$app->route()->post('generate', [Controller\Stats::class, 'generate']);

echo $app->response();
