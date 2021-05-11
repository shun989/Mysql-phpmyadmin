<?php

namespace App\controller;

use App\model;

class CustomerController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new \CustomerDB();
        $this->connect = $dbConnect->connect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM customers";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function convertObject($arr)
    {
        $array = [];
        foreach ($arr as $item){
            $customer = new \Customer($item['id'], $item['name'],$item['email'],$item['address']);
            array_push($array,$customer);
        }
        return $array;
    }

}