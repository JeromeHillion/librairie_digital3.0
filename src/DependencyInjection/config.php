<?php

use App\System\App;

return [
    "appInstance" => \DI\factory([App::class, 'instance']),
    "getInstance" => \DI\factory(["appInstance", 'getInstance']),
    "run" => \DI\factory(["getInstance", 'run'])
];