<?php

namespace Vamakin\GitHooks\Hooks;

class PostCheckoutHook implements Hook
{
    private $args;

    public function __construct($args)
    {
        $this->args = $args;
    }

    public function getFiles()
    {
        $commit_1 = $this->args[1];
        $commit_2 = $this->args[2];
        $command = "git diff-tree -r --name-only --no-commit-id $commit_1 $commit_2";
        exec($command, $output = []);
        return $output;
    }
}
