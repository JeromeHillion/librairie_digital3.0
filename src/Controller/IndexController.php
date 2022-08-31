<?php

namespace App\Controller;

use App\Test\Test;

class IndexController
{

    public function __construct()
    {
    }

    public function run(Test $test): void
    {
        var_dump($test->hello());
    }


}