<?php

namespace Maelstrome26\Template\Contract;

use Twig_Environment;

interface TemplateAwareInterface
{
    public function setTemplateDriver(Twig_Environment $driver);

    public function getTemplateDriver();
}
