<?php

namespace Core\Database;

class Database
{
    protected ?\PDO $pdo;

    public function __construct(
        private string $host = "localhost:3306",
        private string $dbname = "blog",
        private string $user = "esteban",
        private string $pass = "root"
    ) {
        $this->pdo = new \PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            $this->user,
            $this->pass,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]
        );
        $this->pdo->exec("SET NAMES UTF8");
    }
}
