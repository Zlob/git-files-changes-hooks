<?php

namespace GitHooks\Hooks;

interface Handler
{

    public function handle();

    public function beforeAction();

    public function afterAction();
}
