<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;


class DB {

    private $connection;


    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }


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


    public function normalizeResult($request_result) {
        $result = array();
        foreach ($request_result as $row) {
            if (!array_key_exists($row['controller'], $result)) {
                $result[$row['controller']] = array();
            }
            $result[$row['controller']][$row['value_type']] = $row['value'];
        }
        return $result;
    }


    // Remake this shit

    public function selectControllersWithTypes()
    {
        $sql = "SELECT DISTINCTROW controller, value_type FROM temperatures";
        $request = $this->connection->executeQuery($sql);
        return $request->fetchAll();
    }


    public function selectCurrentTemperatures()
    {
        $request_result = array();
        $sql = "SELECT * FROM temperatures WHERE controller=:controller AND value_type=:type ORDER BY time DESC LIMIT 1";
        foreach ($this->selectControllersWithTypes() as $row) {
            $request = $this->connection->prepare($sql);
            $request->bindValue("controller", $row["controller"]);
            $request->bindValue("type", $row["value_type"]);
            $request->execute();
            array_push($request_result, $request->fetch());
        }

        return $this->normalizeResult($request_result);
    }
    
    

    public function selectAllControllerTemperatures(string $controller) {
        $sql = "SELECT * FROM temperatures WHERE controller=:controller";
        $request = $this->connection->prepare($sql);
        $request->bindValue("controller", $controller);
        $request->execute();
        return $request->fetchAll();
    }



}
