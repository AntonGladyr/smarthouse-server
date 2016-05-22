<?php


namespace WebSocketBundle;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use DatabaseBundle\TemperaturesAccess;

class WebSocket implements MessageComponentInterface {

    protected $clients;
    protected $db_temperatures;

    public function __construct(TemperaturesAccess $db_temperatures) {
        $this->db_temperatures = $db_temperatures;
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
        echo "Message handled:\n";
        echo $msg;

        $data = json_decode($msg, true);
        if (!$data) {
            return ;
        }

        print_r($data);



        // Save data to DB
        if ($data['type'] == 'data') {
            // ...
        }

        // Broadcast to all clients
        if ($data['type'] == 'command') {
            $this->broadcastMessage($msg);
        }
    }

    public function broadcastMessage($msg) {
        foreach ($this->clients as $client) {
            $client->send($msg);
        }
    }

    public function onError(ConnectionInterface $connection, \Exception $e) {
        echo $e->getMessage();
    }

}
