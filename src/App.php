<?php

namespace App;

use App\Controllers\BaseController;

class App {

    public function __construct()
    {
        $route = Router::dispatch();
        $controller = '\\App\\Controllers\\' . ucfirst($route['controllerName']) . 'Controller';
        if (class_exists($controller)) {
            new $controller($route);
        }
    }
}
