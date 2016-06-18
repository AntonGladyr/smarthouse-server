<?php
/**
 * Created by PhpStorm.
 * User: cornel
 * Date: 6/17/16
 * Time: 12:36 PM
 */

class AirAccess {
    private $connection;

    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }

    
}