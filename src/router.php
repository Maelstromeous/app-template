<?php

use League\Container\Container;
use League\Container\ContainerInterface;
use League\Route\RouteCollection;

$router = new RouteCollection(
    isset($container) && $container instanceof ContainerInterface ? $container : new Container
);

$router->get('/', 'Maelstrome26\Template\Controller\MainController::helloWorld');
$router->get('/test', 'Maelstrome26\Template\Controller\MainController::testRoute');

return $router;
