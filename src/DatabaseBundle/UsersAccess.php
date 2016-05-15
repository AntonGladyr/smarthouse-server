<?php

namespace DatabaseBundle;

use Doctrine\DBAL\Connection;

class UsersAccess {

    private $connection;

    public function __construct(Connection $dbalConnection)
    {
        $this->connection = $dbalConnection;
    }

    public function selectUserByUsername(string $username)
    {
        $sql = "SELECT * FROM users WHERE username=:username";
        $request = $this->connection->prepare($sql);
        $request->bindValue("username", $username);
        $request->execute();
        return $request->fetch();
    }
    
}