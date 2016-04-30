<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;


class DB {

    private $connection;

    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }

    public function test() {
        echo "DB class\n";
    }


    public function writeTemperature(string $controller, string $type, float $value)
    {
        $sql = "INSERT INTO temperatures VALUES(null, :controller, :type, :value)";
        $request = $this->connection->prepare($sql);
        $request->bindValue("controller", $controller);
        $request->bindValue("type", $type);
        $request->bindValue("value", $value);
        $request->execute();
    }

    // TODO: complete selects

    public function selectCurrentTemperature(string $controller, string $type)
    {
        $sql = "SELECT * FROM temperatures WHERE controller=:controller AND value_type=:type LIMIT 1";
        $request = $this->connection->prepare($sql);
        $request->bindValue("controller", $controller);
        $request->bindValue("type", $type);
        $request->execute();
        // ...
    }

    public function selectCurrentTemperatures()
    {
        $sql = "SELECT * FROM temperatures LIMIT 1";
        $request = $this->connection->prepare($sql);
        $request->execute();
        // ...
    }

    public function selectMonthTemperature(string $controller, string $type)
    {
        $sql = "SELECT * FROM temperatures WHERE controller=:controller AND value_type=:type";
        $request = $this->connection->prepare($sql);
        $request->bindValue("controller", $controller);
        $request->bindValue("type", $type);
        $request->execute();
        // ...
    }

    public function selectMonthTemperatures()
    {
        $sql = "SELECT * FROM temperatures";
        $request = $this->connection->prepare($sql);
        $request->execute();
        // ...
    }

}
