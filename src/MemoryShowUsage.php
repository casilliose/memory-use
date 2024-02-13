<?php

declare(strict_types=1);

namespace Casiliose\MemoryShow;

class MemoryShowUsage {

    private string $className;

    public function __costruct(string $className)
    {
        $this->className = $className;
    }

    public function showMemoryUsageClass()
    {
        $instance = new $this->className();
        memory_get_usage().PHP_EOL;
    }
}

