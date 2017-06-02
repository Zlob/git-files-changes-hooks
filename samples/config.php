<?php

use Vamakin\GitHooks\Commands\BowerInstallCommand;
use Vamakin\GitHooks\Commands\ComposerInstallCommand;
use Vamakin\GitHooks\Commands\NpmInstallCommand;

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
