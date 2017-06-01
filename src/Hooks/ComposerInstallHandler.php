<?php

namespace GitHooks\Hooks;

use Composer\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;

class ComposerInstallHandler extends BaseHandler
{
    protected $handlerName = 'composer.lock file has been changed';


    public function action()
    {
        $input = new ArrayInput(['command' => 'install']);
        $application = new Application();
        $application->setAutoExit(false);
        $application->setCatchExceptions(false);
        $application->run($input);
//        exec('composer install', $output);
//        $this->result = $output;
//        return $this;
    }
}
