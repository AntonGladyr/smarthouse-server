<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;


class DB {

    private $connection;


    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }


    // Write part

    public function writeTemperatures(string $time, array $values)
    {
        $sql = "INSERT INTO temperatures VALUES(:time, :controller, :value_type, :value);";
        foreach ($values as $controller => $value_types) {
            foreach ($value_types as $value_type => $value) {
                $request = $this->connection->prepare($sql);
                $request->bindValue("time", $time);
                $request->bindValue("controller", $controller);
                $request->bindValue("value_type", $value_type);
                $request->bindValue("value", $value);
                $request->execute();
            }
        }

    }






    // Select part




    // Temperatures

    public function selectCurrentTemperatures()
    {
        $sql = "SELECT * FROM temperatures WHERE time=max_time()";
        $request = $this->connection->executeQuery($sql);
        $request_result = $request->fetchAll();

        $result = array();
        foreach ($request_result as $row) {
            if (!array_key_exists($row['controller'], $result)) {
                $result[$row['controller']] = array();
            }
            $result[$row['controller']][$row['value_type']] = $row['value'];
        }
        return $result;
    }

    public function selectControllerTemperatures(string $controller, int $time)
    {
        // ...
    }





}
