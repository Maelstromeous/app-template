<?php

use League\Container\Container;

$container = new Container();

$container->addServiceProvider(Maelstrome26\Template\ServiceProvider\HttpMessageServiceProvider::class);
$container->addServiceProvider(Maelstrome26\Template\ServiceProvider\ConfigServiceProvider::class);

$container->inflector(Maelstrome26\Template\Contract\ConfigAwareInterface::class)
          ->invokeMethod('setConfig', ['config']);

$container->add(Maelstrome26\Template\Controller\MainController::class);

return $container;
