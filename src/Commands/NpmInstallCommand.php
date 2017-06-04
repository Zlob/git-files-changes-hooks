<?php

namespace Vamakin\PhpPackagesSynchronizer\Commands;

class NpmInstallCommand extends BaseCommand
{
    public function action()
    {
        exec('npm install', $output);
        $this->result = $output;
        return $this;
    }

    protected function getName()
    {
        return 'package.json file has been changed';
    }
}
