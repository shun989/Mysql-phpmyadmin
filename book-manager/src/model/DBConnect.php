<?php

namespace App\model;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=library_manager";
        $this->username = "shun";
        $this->password = "aM@i8972";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $exception){
            echo "Server đang bảo trì! Vui lòng quay lại sau. Xin cảm ơn.";
            exit();
        }
    }
}