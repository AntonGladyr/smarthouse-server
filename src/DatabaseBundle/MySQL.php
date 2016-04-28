<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;


class MySQL {

    private $connection;

    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }

    public function example() {
        $stmt = $this->connection->prepare("SELECT * FROM USERS WHERE id = :id");
        $stmt->bindValue("id", "1");
        $stmt->execute();
    }
}
