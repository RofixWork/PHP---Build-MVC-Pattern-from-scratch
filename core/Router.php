<?php

namespace app\core;

use http\Exception;

class Router
{
    private array $routes = [];
    public function register(string $requestMethod, string $path, callable|array $callback) : self {
        $this->routes[$requestMethod][strtolower(trim($path))] = $callback;
        return $this;
    }

    public function get(string $path, callable|array $callback): self {
        return $this->register("get", $path, $callback);
    }

    public function post(string $path, callable|array $callback): self {
        return $this->register("post", $path, $callback);
    }
    /**
     * @throws \Exception
     */
    public function resolve(string $request_uri, string $requestMethod)  {
        $path = explode("?", $request_uri)[0];
        $action = $this->routes[$requestMethod][$path] ?? null;
        $content = null;
        if(!$action) {
            throw new \Exception("Not Found this path \"{$path}\" (404)");
        }
        if(is_callable($action))
            $content = call_user_func($action);

        if(is_array($action)) {
            [$class, $method] = $action;
            if(class_exists($class)) {
                $class = new $class;
                if(method_exists($class, $method)) {
                    $content = call_user_func_array([$class, $method], $action);
                }
            }
        }
        return $content;
    }
}