<?php

namespace App\controller;
use App\model;

class BaseController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllBook()
    {
        $sql = "SELECT * FROM books";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function addBook(
        $name,
        $year,
        $amount,
        $authorId,
        $categoryCode,
        $companyCode,
        $languageCode,
        $locationCode)
    {
        $sql = "INSERT INTO books VALUE(
        null,
        '$name',
        '$year',
        '$amount',
        '$authorId',
        '$categoryCode',
        '$companyCode',
        '$languageCode',
        '$locationCode')";
        $query = $this->connect->query($sql);
        return $query->exec();
    }

    public function deleteBook($id)
    {
        $sql = "DELETE FROM books WHERE bookCode = '$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function getBookById($id)
    {
        $sql = "SELECT * FROM books WHERE bookCode = '$id'";
        $query = $this->connect->query($sql);
        return $query->fetch();
    }

    public function updateBook(
        $id,
        $name,
        $year,
        $amount,
        $authorId,
        $categoryCode,
        $companyCode,
        $languageCode,
        $locationCode
    )
    {
        $sql = "UPDATE books SET 
                bookName='$name',
                publishingYear='$year',
                amount = '$amount',
                authorID='$authorId',
                categoryCode='$categoryCode',
                companyCode='$companyCode',
                languageCode='$languageCode',
                locationCode='$locationCode'
                WHERE bookCode = '$id'";

        $query = $this->connect->query($sql);
        return $query->execute();
    }

}