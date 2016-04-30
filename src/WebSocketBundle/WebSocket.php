<?php


namespace WebSocketBundle;


use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use DatabaseBundle\DB;

class WebSocket implements MessageComponentInterface {

    protected $clients;
    protected $DB;

    public function __construct(DB $DB) {
        $this->DB = $DB;
        $this->clients = new \SplObjectStorage;
    }
    
    public function onOpen(ConnectionInterface $connection) {
        echo "\nNew connection. Id: ".$connection->resourceId."\n";
        $this->clients->attach($connection);
    }

    public function onClose(ConnectionInterface $connection) {
        echo "\nDisconnect. Id: ".$connection->resourceId."\n";
        $this->clients->detach($connection);
    }

    public function onMessage(ConnectionInterface $connection, $msg) {
        $info = (array)simplexml_load_string($msg);
        foreach ((array)$info["temperatures"] as $controller => $value_types) {
            foreach ((array)$value_types as $value_type => $value) {
                $value = (float)$value;
            }
        }
    }

    public function onError(ConnectionInterface $connection, \Exception $e) {

    }

}
