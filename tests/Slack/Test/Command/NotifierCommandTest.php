<?php
namespace Slack\Test\Command;
use Slack\Command\NotifierCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

/**
 *  this test is just not really cool
 *  @TODO add a mock on notifier, and test the command
 */
class NotifierCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * [testExecute description]
     * @return [type] [description]
     */
    public function testExecute()
    {
        $application = new Application();
        $application->add(new NotifierCommand());

        $command = $application->find('notify');
        $commandTester = new CommandTester($command);
        try {
            $commandTester->execute(array('command' => $command->getName(), 'message'=>'test','channel'=>'test'));
            $this->failed('');

        } catch (\Guzzle\Http\Exception\CurlException $expected) {
            return;
        }

    }
}
