<?php


namespace App\controller;
use App\model;

class CategoryController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function addCategory($categoryCode,$categoryName)
    {
        $sql = "INSERT INTO categories VALUE( null,'$categoryCode', '$categoryName')";
        $query = $this->connect->query($sql);
        return $query->exec();
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id = '$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM categories WHERE id = '$id'";
        $query = $this->connect->query($sql);
        return $query->fetch();
    }

    public function updateCategory($id, $categoryCode, $categoryName)
    {
        $sql = "UPDATE categories SET categoryCode='$categoryCode', categoryName='$categoryName'
                WHERE id = '$id'";

        $query = $this->connect->query($sql);
        return $query->execute();
    }
}