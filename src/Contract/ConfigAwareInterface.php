<?php

namespace Maelstrome26\Template\Contract;

interface ConfigAwareInterface
{
    public function setConfig(array $config);

    public function getConfig();
}
