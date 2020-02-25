<?php
namespace App;

class Router
{
    public static function dispatch()
    {
        $controllerName = 'Page';
        $actionName     = 'index';
        $method = array_key_exists('REQUEST_METHOD', $_SERVER) ? $_SERVER['REQUEST_METHOD'] : null;
        $routes         = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        if (!empty($routes[0])) {
            $controllerName = $routes[0];
        }

        if (!empty($routes[1])) {
            $actionName = $routes[1];
        }
        return ['controllerName' => $controllerName, 'actionName' => $actionName, 'methodName' => $method];
    }
}
