<?php

namespace app\core;

class Controller {
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $param=[])
    {
        return Application::$app->router->renderView($view, $param);
    }
}