<?php

use Vamakin\GitFilesChangesHooks\Handler;

class HandlerTest extends PHPUnit_Framework_TestCase
{

    public function test_handler_is_works()
    {

        $hook = $this->createMock(\Vamakin\GitFilesChangesHooks\Hooks\Hook::class);
        $hook->method('getFiles')
            ->willReturn(['test_file']);

        $command = $this->getMockBuilder(\Vamakin\GitFilesChangesHooks\Commands\Command::class)
            ->setMethods(['handle'])
            ->getMock();

        $command->expects($this->once())
            ->method('handle')
        ->with();

        $handler = new Handler($hook);
        $handler->addCommand('test_file', $command);
        $handler->handle();
    }

}
