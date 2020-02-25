<?php

namespace App\Controllers;

use App\View;

class PageController {

    public function __construct($route)
    {
        return $this->page($route['actionName']);
    }

    public function index()
    {
        return $this->page('index');
    }

    public function page($page, $data = [])
    {
        return new View($page, $data);
    }
}
