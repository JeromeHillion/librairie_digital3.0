<?php

namespace App\Manager;

class ControllerManager
{

    public function getControllerName()
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        $controllerName = substr($request_uri, 1);
        if (empty($controllerName)) {
            $controllerName = "Index";
        }

        $controllerClass = "App\\Controller\\" . $controllerName . "Controller";

        return new $controllerClass();
    }
}
