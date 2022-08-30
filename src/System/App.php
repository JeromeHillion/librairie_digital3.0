<?php

namespace App\System;

use App\Manager\ControllerManager;

class App
{

    private static $_instance = null;


    public static function instance(): App
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    private function __construct()
    {
    }

    public function run()
    {
        $controllerManager = new ControllerManager();
        return $controllerManager->getControllerName()->run();
    }

}
