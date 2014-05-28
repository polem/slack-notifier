<?php
namespace Slack\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class NotifierCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('notify')
        ->setDescription('send a simple message to Slack')
        ->addOption(
            'team',
            null,
            InputOption::VALUE_REQUIRED,
            'Your slack team/organization name',
            null
            )
        ->addOption(
            'token',
            null,
            InputOption::VALUE_REQUIRED,
            'Your slack auth token', null
            )

        ->addOption(
            'emoji',
            null,
            InputOption::VALUE_OPTIONAL,
            'icon_emoji used in Slack'
            )

        ->addOption(
            'username',
            null,
            InputOption::VALUE_REQUIRED,
            'username used in Slack', 'slack-notifier'
            )

        ->addArgument(
            'channel',
            InputArgument::REQUIRED,
            'your message will be posted on this channel'
            )

        ->addArgument(
            'message',
            InputArgument::REQUIRED,
            'message that will be posted'
            );

    }
    /**
     * [execute description]
     * @param  InputInterface  $input  [description]
     * @param  OutputInterface $output [description]
     * @return [type]          [description]
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $client = new \Slack\Client($input->getOption('team'),$input->getOption('token'));
        $slack = new \Slack\Notifier($client);
        $message = new \Slack\Message\Message($input->getArgument('message'));

        $message->setChannel($input->getArgument('channel'))
                ->setUsername($input->getOption('username'));

        if ( $input->getOption('emoji') ) {

            $message->setIconEmoji($input->getOption('emoji'));
        }
        $slack->notify($message);
        $output->writeln("Sent!");
    }
}
