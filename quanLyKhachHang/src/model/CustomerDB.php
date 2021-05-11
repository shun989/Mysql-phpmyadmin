<?php

namespace App\model;
class CustomerDB
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO 'customer'('name', 'email', 'address') VALUES (?, ?, ?)";
    }
}