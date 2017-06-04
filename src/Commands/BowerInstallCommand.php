<?php

namespace Vamakin\PhpPackagesSynchronizer\Commands;

class BowerInstallCommand extends BaseCommand
{
    public function action()
    {
        exec('./node_modules/bower/bin/bower install', $output);
        $this->result = $output;
        return $this;
    }

    protected function getName()
    {
        return 'bower.json file has been changed';
    }
}
