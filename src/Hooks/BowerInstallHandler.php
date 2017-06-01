<?php

namespace GitHooks\Hooks;

class BowerInstallHandler extends BaseHandler
{
    protected $handlerName = 'bower.json file has been changed';

    public function action()
    {
        exec('./node_modules/bower/bin/bower install', $output);
        $this->result = $output;
        return $this;
    }
}
