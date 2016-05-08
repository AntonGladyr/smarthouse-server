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
        switch ($time) {
            case 7:
                $sql = "SELECT
                        DATE_FORMAT(time, '%y-%m-%d') as time,
                        value_type, ROUND(AVG(value), 1) as value
                    FROM
                        temperatures
                    WHERE
                        controller = 'controller1'
                            AND DATE_FORMAT(time, '%y-%m-%d') = DATE_FORMAT(CURDATE() - INTERVAL :interval DAY, '%y-%m-%d')
                    GROUP BY value_type";


                $request_result =[];
                for ($i=0;$i<7;$i++) {
                    $request = $this->connection->prepare($sql);
                    $request->bindValue("interval", $i);
                    $request->execute();
                    array_push($request_result, $request->fetchAll());
                }

                $result = ["labels"=>[], "value_types"=>[]];
                foreach($request_result as $day) {
                    foreach($day as $recording) {
                        array_push($result["labels"], $recording["time"]);
                        if (!key_exists($recording["value_type"], $result["value_types"])) {
                            $result["value_types"][$recording["value_type"]] = [];
                        }
                        array_push($result["value_types"][$recording["value_type"]], floatval($recording["value"]));
                    }
                }
                $result["labels"] = array_unique($result["labels"]);
                rsort($result["labels"]);

                return $result;

                break;
            case 1:
                break;
            case 24:
                break;
        }
    }





}
