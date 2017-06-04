<?php

namespace Vamakin\PhpPackagesSynchronizer\Commands;

abstract class BaseCommand implements Command
{
    protected $handlerName = '';

    protected $result = [];

    public function handle()
    {
        $this->beforeAction();
        $this->action();
        $this->afterAction();
    }

    protected function beforeAction()
    {
        $this->info($this->getName());
        return $this;
    }

    protected function afterAction()
    {
        foreach ($this->result as $line) {
            $this->info($line);
        }
        return $this;
    }

    protected function info($message)
    {
        printf($message);
    }

    abstract protected function action();

    abstract protected function getName();
}
