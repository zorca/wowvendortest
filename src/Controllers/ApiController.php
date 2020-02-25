<?php

namespace App\Controllers;

class ApiController {

    public function __construct($route)
    {
        switch($route['methodName']) {
            case 'GET':
                echo $this->index();
                break;
            case 'POST':
                echo $this->create($this->parameters['title'], $this->parameters['done']);
                break;
            case 'PUT':
                echo $this->update($this->parameters['id'], $this->parameters['title'], $this->parameters['done']);
                break;
            case 'DELETE':
                echo $this->delete($this->parameters['id']);
                break;
            default:
                echo $this->response('Method Not Found', 405);
                break;
        }
    }

    protected function index()
    {
        return $this->response(['message' => 'ok'], 200);
    }

    protected function response($data, $status = 500)
    {
        $statusText = [
            200 => 'Ok',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error'
        ];
        header("Access-Control-Allow-Orgin: *");
        header("Access-Control-Allow-Methods: *");
        header('Content-type: application/json');
        header('HTTP/1.1 ' . $status . ' ' . $statusText[$status]);
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
