<?php

namespace GitHooks\Hooks;

abstract class BaseHandler implements Handler
{
    protected $handlerName = '';

    protected $result = [];

    public function handle()
    {
        $this->beforeAction()
            ->action()
            ->afterAction();
    }

    public function beforeAction()
    {
        $this->info($this
            ->handlerName);
        return $this;
    }

    public function afterAction()
    {
        foreach ($this->result as $line) {
            $this->info($line);
        }
        return $this;
    }

    public function info($message)
    {
        print $message;
    }

    abstract protected function action();
}
