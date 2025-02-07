<?php
class Router {
    private $routes = [];

    public function get($route, $callback) {
        $this->routes["GET"][$route] = $callback;
    }
    
    public function post($route, $callback) {
        $this->routes["POST"][$route] = $callback;
    }

    public function resolve($uri, $method) {
        $callback = $this->routes[$method][$uri] ?? null;
        if ($callback) {
            call_user_func($callback);
        } else {
            header("HTTP/1.0 404 Not Found");
            require __DIR__ . "/../app/views/404.php";
        }
    }
}
?>