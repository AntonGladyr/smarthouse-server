<?php


namespace WebSocketBundle;


use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use DatabaseBundle\DB;

class WebSocket implements MessageComponentInterface {

    protected $clients;
    protected $db_temperatures;

    public function __construct(DB $DB) {
        $this->db_temperatures = $DB;
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
        $data = json_decode($msg, true);
        print_r($data);
        $time = $data['time'];
        if (array_key_exists("temperatures", $data)) {
            $values = $data["temperatures"];
            $this->db_temperatures->writeTemperatures($time, $values);
        }
    }

    public function onError(ConnectionInterface $connection, \Exception $e) {

    }

}
