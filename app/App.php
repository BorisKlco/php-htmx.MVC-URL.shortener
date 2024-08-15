<?php

namespace App;

class App
{
    public function __construct(
        private Router $router,
        private DB $db
    ) {}

    public function route(): Router
    {
        return $this->router;
    }

    public function render(): array
    {
        $path = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];
        return $this->router->resolve($path, $method);
    }

    public function response(): string
    {
        [$status, $content] = $this->render();
        http_response_code($status);
        return $content;
    }
}
