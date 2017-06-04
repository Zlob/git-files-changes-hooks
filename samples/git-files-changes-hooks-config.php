<?php

use Vamakin\GitFilesChangesHooks\Commands\BowerInstallCommand;
use Vamakin\GitFilesChangesHooks\Commands\ComposerInstallCommand;
use Vamakin\GitFilesChangesHooks\Commands\NpmInstallCommand;

return $config = [
    'post-checkout' => [
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
