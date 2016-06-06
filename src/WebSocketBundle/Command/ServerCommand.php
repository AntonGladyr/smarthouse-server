<?php

namespace WebSocketBundle\Command;

use DatabaseBundle\TemperaturesAccess;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\Server\IoServer;

use WebSocketBundle\WebSocket;

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
        $db_temperatures = $this->getContainer()->get('temperatures.access');

        /** @var TemperaturesAccess $db_temperatures */
        $ws = new WsServer(new WebSocket($db_temperatures));
        $ws->disableVersion(0); // old, bad, protocol version

        // Make sure you're running this as root
        $server = IoServer::factory(new HttpServer($ws), 443);
        $server->run();
    }
}