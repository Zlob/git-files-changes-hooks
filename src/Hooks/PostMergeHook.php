<?php

namespace Vamakin\GitFilesChangesHooks\Hooks;

class PostMergeHook implements Hook
{
    private $args;

    public function __construct($args)
    {
        $this->args = $args;
    }

    public function getFiles()
    {
        $command = "git diff-tree -r --name-only --no-commit-id HEAD";
        $output = [];
        exec($command, $output);
        return $output;
    }
}
