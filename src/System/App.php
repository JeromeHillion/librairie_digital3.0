<?php

namespace App\System;

use App\Manager\ControllerManager;

class App
{

    private static ?App $_instance = null;


    public static function instance(): ?App
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    private function __construct()
    {
    }

    public function getInstance(ControllerManager $manager)
    {

        return $manager->getControllerName();
    }

}
