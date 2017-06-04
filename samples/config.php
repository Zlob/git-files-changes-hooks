<?php

use Vamakin\PhpPackagesSynchronizer\Commands\BowerInstallCommand;
use Vamakin\PhpPackagesSynchronizer\Commands\ComposerInstallCommand;
use Vamakin\PhpPackagesSynchronizer\Commands\NpmInstallCommand;

return $config = [
    'post-update' => [
        'composer.lock' => ComposerInstallCommand::class,
        'bower.json' => BowerInstallCommand::class,
        'package.json' => NpmInstallCommand::class
    ],
    'post-merge' => [
        'composer.lock' => ComposerInstallCommand::class,
        'bower.json' => BowerInstallCommand::class,
        'package.json' => NpmInstallCommand::class
    ]
];
