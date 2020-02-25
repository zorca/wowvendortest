<?php

namespace App;

class View {

    public function __construct($view, $data)
    {
        $view_file = DIR_VIEWS . '/' . $view . '.php';
        if (file_exists($view_file)) {
            include $view_file;
            die();
        }
        echo '404 error';
    }
}
