<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/model/table.css">
</head>
<style>
    button {
        margin: 10px;
    }
</style>
<body>
<button><a href="index.php?page=book">list-book</a></button>
<button><a href="index.php?page=category">list-category</a></button>
<!--<button><a href="index.php?page=add-book">add-book</a></button>-->
</body>
</html>
<?php

include __DIR__ . "/vendor/autoload.php";
use App\controller\BaseController;

$baseController = new BaseController();
$categoryController = new \App\controller\CategoryController();

$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'book':
        $book = $baseController->getAllBook();
        include_once 'src/view/book/list-book.php';
        break;
    case 'add-book':
        include_once "src/view/book/add-book.php";
        break;
    case 'delete-book':
        $id = $_GET['bookCode'];
        $baseController->deleteBook($id);
        header("location:index.php?page=book");
        break;
    case 'edit-book':
        $book = $baseController->getBookById($_GET['bookCode']);
        include_once "src/view/book/edit-book.php";
        break;

    case 'category':
        $category = $categoryController->getAllCategory();
        include_once 'src/view/category/list-category.php';
        break;
    case 'add-category':
        include_once 'src/view/category/add-category.php';
        break;
    case 'delete-category':
        $id = $_GET['id'];
        $categoryController->deleteCategory($id);
        header('location:index.php?page=category');
        break;
    case 'edit-category':
        $category = $categoryController->getCategoryById($_GET['id']);
        include_once 'src/view/category/edit-category.php';
        break;
}
?>
