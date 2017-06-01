<?php


namespace GitHooks\Hooks;

class NpmInstallHandler extends BaseHandler
{
    protected $handlerName = 'package.json file has been changed';

    public function action()
    {
        exec('npm install', $output);
        $this->result = $output;
        return $this;
    }
}
