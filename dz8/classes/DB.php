<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new PDO($dsn, $config['username'], $config['password']);
    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res === true) {
            return $sth->fetchAll();
        } else {
            return false;
        }
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res === true) {
            return true;
        } else {
            return false;
        }
    }
}
