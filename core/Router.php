<?php

namespace core;

class Router
{
    private array $routes = [];

    public function get(string $uri, array $action)
    {
        $this->addRoute('GET', $uri, $action);
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function post(string $uri, array $action)
    {
        $this->addRoute('POST', $uri, $action);
    }

    private function addRoute(string $method, string $uri, array $action)
    {
        $pattern = preg_replace('/\{[a-zA-Z_]+\}/', '([a-zA-Z0-9_-]+)', $uri);
        $pattern = "#^" . $pattern . "$#";
        $this->routes[] = [
            'method' => $method,
            'pattern' => $pattern,
            'controller' => $action[0],
            'method_name' => $action[1]
        ];
    }

    public function dispatch(string $requestUri, string $requestMethod)
    {
        foreach ($this->routes as $route) {
            if (
                $route['method'] === $requestMethod &&
                preg_match($route['pattern'], $requestUri, $matches)
            ) {
                array_shift($matches); // Remove o full match
                $controller = new $route['controller'];
                return call_user_func_array([$controller, $route['method_name']], $matches);
            }
        }

        http_response_code(404);
        echo "Rota não encontrada!";
    }
}
