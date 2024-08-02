<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

// define('VIEW_PATH', __DIR__ . '/../views/');

// $router = new Router();

// $router->get('/', [Controller\Home::class, 'main']);

// echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
session_start();

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $cookies,
        public readonly array $files,
        public readonly array $server

    ) {
    }

    public static function test(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}

$req = Request::test();


echo '<pre>';
print_r($req);
