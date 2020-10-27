<?php


namespace app\core;


class Controller
{
    public $layoute = 'main';

    public function setLayout($layout)
    {
        $this->layoute = $layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}