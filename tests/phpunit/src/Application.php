<?php

namespace Grasmash\Artifice\Tests;

class Application extends \Composer\Console\Application
{
    public function setIo($io)
    {
        $this->io = $io;
    }
}
