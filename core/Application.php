<?php
namespace app\core;

class Application {
    
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public function __construct($rootpath)
    {
        self::$ROOT_DIR = $rootpath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    public function getController(){
        return $this->controller;
    }

    public function setController()
    {
        return $this->controller;
    }

    public function run(){
        echo $this->router->resolve();
    }
}