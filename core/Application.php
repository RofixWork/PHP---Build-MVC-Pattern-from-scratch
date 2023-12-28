<?php



namespace app\core;
use Exception;

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    /**
     * @throws Exception
     */
    public function run(string $request_uri, string $requestMethod) : void{
        echo $this->router->resolve($request_uri, strtolower($requestMethod));
    }
}