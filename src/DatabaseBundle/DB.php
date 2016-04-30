<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;


class DB {

    private $connection;


    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
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


    public function selectControllersWithTypes()
    {
        $sql = "SELECT DISTINCTROW controller, value_type FROM temperatures";
        $request = $this->connection->executeQuery($sql);
        return $request->fetchAll();
    }


    public function selectCurrentTemperatures()
    {
        $result = array();
        $sql = "SELECT * FROM temperatures WHERE controller=:controller AND value_type=:type ORDER BY time DESC LIMIT 1";
        foreach ($this->selectControllersWithTypes() as $row) {
            $request = $this->connection->prepare($sql);
            $request->bindValue("controller", $row["controller"]);
            $request->bindValue("type", $row["value_type"]);
            $request->execute();
            array_push($result, $request->fetch());
        }
        return $result;
    }



    public function selectMonthTemperatures()
    {
        $sql = "SELECT * FROM temperatures";
        $request = $this->connection->executeQuery($sql);
        return $request->fetchAll();
    }

}
