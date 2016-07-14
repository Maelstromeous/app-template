<?php

use League\Container\Container;

$container = new Container();

$container->addServiceProvider(Maelstrome26\Template\ServiceProvider\ConfigServiceProvider::class);
$container->addServiceProvider(Maelstrome26\Template\ServiceProvider\HttpMessageServiceProvider::class);
$container->addServiceProvider(Maelstrome26\Template\ServiceProvider\TemplateServiceProvider::class);

$container->inflector(Maelstrome26\Template\Contract\ConfigAwareInterface::class)
          ->invokeMethod('setConfig', ['config']);
$container->inflector(Maelstrome26\Template\Contract\TemplateAwareInterface::class)
          ->invokeMethod('setTemplateDriver', ['Twig_Environment']);

$container->add(Maelstrome26\Template\Controller\MainController::class);

return $container;
