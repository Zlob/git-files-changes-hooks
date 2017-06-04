<?php

namespace Vamakin\GitFilesChangesHooks\Commands;

use Composer\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;

class ComposerInstallCommand extends BaseCommand
{
    public function action()
    {
        $input = new ArrayInput(['command' => 'install']);
        $application = new Application();
        $application->setAutoExit(false);
        $application->setCatchExceptions(false);
        $application->run($input);
    }

    protected function getName()
    {
        return 'composer.lock file has been changed';
    }
}
