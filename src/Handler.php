<?php

namespace Vamakin\PhpPackagesSynchronizer;

use Vamakin\PhpPackagesSynchronizer\Commands\Command;
use Vamakin\PhpPackagesSynchronizer\Hooks\Hook;

class Handler
{
    protected $hook;
    protected $commands = [];

    public function __construct(Hook $hook)
    {
        $this->hook = $hook;
    }

    public function addCommand($mask, Command $command)
    {
        if (array_key_exists($mask, $this->commands)) {
            $this->commands[$mask] = [];
        }
        $this->commands[$mask][] = $command;
    }

    public function handle()
    {
        foreach ($this->hook->getFiles() as $file) {
            if ($this->mightBeHandled($file)) {
                $this->handleFile($file);
            }
        }
    }

    private function mightBeHandled($file)
    {
        return array_key_exists($file, $this->commands);
    }

    private function handleFile($file)
    {
        foreach ($this->commands[$file] as $command) {
            $command->handle();
        }
    }
}
