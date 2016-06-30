<?php

namespace WebSocketBundle\Command;

use DatabaseBundle\TemperaturesAccess;
use Ratchet\Http\HttpServer;
use Ratchet\Session\SessionProvider;
use Ratchet\WebSocket\WsServer;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\Server\IoServer;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use WebSocketBundle\WebSocket;

class ServerCommand extends ContainerAwareCommand
{

    private $session;

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
        $authorizationChecker = $this->getContainer()->get( 'security.authorization_checker' );
        $webSocket      = new WebSocket( $db_temperatures );
        $container      = $this->getContainer();
        $savePath       = $container->getParameter( 'sm_session_save_path' );
        $sessionHandler = new NativeFileSessionHandler( $savePath );

        $authorizationChecker = $this->getContainer()->get( 'security.authorization_checker' );

        var_dump($authorizationChecker->isGranted('ROLE_ADMIN'));

        $session        = new SessionProvider(
            $webSocket,
            $sessionHandler
        );


        $ws        = new WsServer( $session );
        $ws->disableVersion(0);



        // Make sure you're running this as root
        $server = IoServer::factory(new HttpServer($ws), $this->getContainer()->getParameter('websocket.port'));

        $server->run();
    }

    public function setSession( Session $session ) {
        $this->session = $session;
    }
}