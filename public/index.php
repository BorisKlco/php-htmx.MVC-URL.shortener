<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once __DIR__ . '/../app/path.php';

$app = new App(
    $router = new Router(),
    $db = new DB([
        'host' => $_ENV['DB_HOST'],
        'db' => $_ENV['DB'],
        'usr' => $_ENV['DB_USER'],
        'psw' => $_ENV['DB_PASS'],
    ])
);

$app->route()->get('/', [Controller\Home::class, 'index']);
$app->route()->get('i', [Controller\Home::class, 'link']);
$app->route()->get('stats', [Controller\Stats::class, 'index']);
$app->route()->get('s', [Controller\Stats::class, 'linkStats']);
$app->route()->post('generate', [Controller\Stats::class, 'generate']);

echo $app->response();
