<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input {
        width: 500px;
        padding: 6px;
        margin-top: 10px;
    }
    form{
        width: 40%;
        margin-left: 30%;
        margin-top: 100px;
    }
</style>
<body>
<form method="post">
    <fieldset style="background-color: aqua">
        <h2 style="text-align: center">Add Book</h2>
        <table style="background-color: lightyellow; margin: 35px">
            <tr>
                <td>Tên sách:</td>
                <td><input type="text" name="bookName"></td>
            </tr>
            <tr>
                <td>Năm phát hành:</td>
                <td><input type="text" name="publishingYear"></td>
            </tr>
            <tr>
                <td>Giá:</td>
                <td><input type="text" name="amount"></td>
            </tr>
            <tr>
                <td>Mã tác giả:</td>
                <td><input type="text" name="authorID"></td>
            </tr>
            <tr>
                <td>Mã thể loại:</td>
                <td><input type="text" name="categoryCode"></td>
            </tr>
            <tr>
                <td>Mã nhà xuất bản:</td>
                <td><input type="text" name="companyCode"></td>
            </tr>
            <tr>
                <td>Mã ngôn ngữ:</td>
                <td><input type="text" name="languageCode"></td>
            </tr>
            <tr>
                <td>Mã vị trí:</td>
                <td><input type="text" name="locationCode"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" style="width: 80px; height: 50px;  margin-left: 30%;">OK</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_REQUEST['bookName'];
    $year = $_REQUEST['publishingYear'];
    $amount = $_REQUEST['amount'];
    $authorId = $_REQUEST['authorID'];
    $categoryCode = $_REQUEST['categoryCode'];
    $companyCode = $_REQUEST['companyCode'];
    $languageCode = $_REQUEST['languageCode'];
    $locationCode = $_REQUEST['locationCode'];

    $baseController->addBook(
        $name,
        $year,
        $amount,
        $authorId,
        $categoryCode,
        $companyCode,
        $languageCode,
        $locationCode);

    header("location:index.php?page=book");
}
$query = null;
