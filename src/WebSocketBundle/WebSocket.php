<?php


namespace WebSocketBundle;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use DatabaseBundle\TemperaturesAccess;

class WebSocket implements MessageComponentInterface {

    /**
     * @var ConnectionInterface
     */
    protected $sensors;
    protected $clients;
    protected $db_temperatures;

    protected $static_info;

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
        $request = json_decode($msg, true);
        if (!$request) {
            echo "Error\n";
            return ;
        }



        switch ($request['destination']) {

            // Server handle
            case 'server':
                switch ($request['type']) {
                    // Sensors init
                    case 'sensors/init':
                        $this->static_info = $request['data'];
                        print_r($this->static_info);
                        $this->sensors = $connection;
                        break;
                    // Static data
                    case 'request/data/air/static':
                        $response = array(
                            'destination'=>'client',
                            'type'=>'data/air/static',
                            'data'=>$this->static_info['air']
                        );
                        $connection->send(json_encode($response));
                        break;
                    case 'request/data/power/static':
                        $response = array(
                            'destination'=>'client',
                            'type'=>'data/power/static',
                            'data'=>$this->static_info['power']
                        );
                        $connection->send(json_encode($response));
                        break;
                    case 'request/data/water/static':
                        $response = array(
                            'destination'=>'client',
                            'type'=>'data/water/static',
                            'data'=>$this->static_info['water']
                        );
                        print_r($response);
                        $connection->send(json_encode($response));
                        break;
                    // Controls
                    case 'request/controls/air':
                        $response = '{
                            "destination": "client",
                            "type": "controls/air",
                            "controls": {
                                        "GD10": {
                                            "Example1": {
                                                "type": "number",
                                        "range": [10, 40],
                                        "label": "warning",
                                        "value": 10
                                    },
                                    "Example2": {
                                                "type": "number",
                                        "range": [100, 1000],
                                        "label": "warning",
                                        "value": 150
                                    },
                                    "Example3": {
                                                "type": "number",
                                        "range": [0, 1],
                                        "label": "warning",
                                        "value": 0
                                    }
                                }
                            }
                        }';
                        $connection->send($response);
                        break;
                    // Database
                };
                break;

            // Broadcast
            case 'client':
                foreach ($this->clients as $client) {
                    $client->send($msg);
                }
                break;

            // Commands
            case 'sensors':
                $this->sensors->send($msg);
                break;
        }

    }

    public function onError(ConnectionInterface $connection, \Exception $e) {
        echo $e->getMessage();
    }

}
