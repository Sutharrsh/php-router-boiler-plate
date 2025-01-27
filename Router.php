<?php

class Router {
    private $routes = [];

    public function addRoute($method, $route, $handler) {
        $this->routes[] = ['method' => $method, 'route' => $route, 'handler' => $handler];
    }

    public function dispatch() {
        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        // Remove "/portfolio" prefix from the URL if the project is inside the "portfolio" folder
        $url = str_replace('/portfolio', '', $url);

        foreach ($this->routes as $route) {
            if ($route['method'] == $method && $route['route'] == $url) {
                call_user_func($route['handler']);
                return;
            }
        }

        echo "404 Not Found";
    }
}

?>
