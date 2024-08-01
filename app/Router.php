<?php

namespace App;

use Error;

class Router
{
    private array $routes = [];

    private function register(
        string $method,
        string $route,
        callable|array $action
    ): self {
        $this->routes[$method][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('GET', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('POST', $route, $action);
    }

    public function resolve(string $path, string $method)
    {
        $route = explode('?', $path)[0];
        $action = $this->routes[$method][$route] ?? null;

        if (!$action) {
            return call_user_func_array([new Controller\Home, 'error'], []);
        }

        $class = new $action[0];

        return call_user_func_array([$class, $action[1]], []);
    }
}
