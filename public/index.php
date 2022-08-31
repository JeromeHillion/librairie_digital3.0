<?php

use App\Manager\ControllerManager;
use App\System\App;
use App\Test\Test;
use DI\Container;
use DI\ContainerBuilder;

require "../vendor/autoload.php";
$manager = new ControllerManager;
$test = new Test();
$container = new Container();
$builder = new ContainerBuilder();
$builder->addDefinitions("../src/DependencyInjection/config.php");
try {
    $container = $builder->build();
} catch (Exception $e) {
}

try {
    //var_dump($container->get('getInstance')); die();
    $container->get('run');
} catch (\DI\DependencyException|\DI\NotFoundException $e) {
}