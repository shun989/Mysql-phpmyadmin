<?php
namespace App\model;
use PDO;

class DBConnection
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost; dbname = customers";
        $this->username = "shun";
        $this->password = "aM@i8972";
    }

    public function connect()
    {
        try{
            return new \PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $exception){
            echo "Máy chủ đang bảo trì.";
            exit();
        }
    }
}