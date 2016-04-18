<?php


namespace WebSocketBundle;


use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class WebSocket implements MessageComponentInterface {

    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }
    
    public function onOpen(ConnectionInterface $connection) {
        echo "Test";    
        
        $this->clients->attach($connection);
    }

    public function onClose(ConnectionInterface $connection) {
        
    }

    public function onMessage(ConnectionInterface $connection, $msg) {
        echo "$msg\n";
    }

    public function onError(ConnectionInterface $connection, \Exception $e) {
    
    }

}
