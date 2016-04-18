<?php

namespace WebSocketBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\Server\IoServer;

class ServerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('websocket:run')
            ->setDescription('Start websocket server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $websocket = $this->getContainer()->get('web_socket');
        $server = IoServer::factory($websocket, 8080);
        $server->run();
    }
}

