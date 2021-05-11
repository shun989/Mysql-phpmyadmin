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
</style>
<body>
<form method="post">
    <fieldset style="width: 800px">
        <h2 style="text-align: center">Edit Book</h2>
        <table>
            <tr>
                <td>Tên sách:</td>
                <td><input type="text" name="bookName" value="<?php echo $book['bookName'] ?>"></td>
            </tr>
            <tr>
                <td>Năm phát hành:</td>
                <td><input type="text" name="publishingYear" value="<?php echo $book['publishingYear'] ?>"></td>
            </tr>
            <tr>
                <td>Giá:</td>
                <td><input type="text" name="amount" value="<?php echo $book['amount'] ?>"></td>
            </tr>
            <tr>
                <td>Mã tác giả:</td>
                <td><input type="text" name="authorID" value="<?php echo $book['authorID'] ?>"></td>
            </tr>
            <tr>
                <td>Mã thể loại:</td>
                <td><input type="text" name="categoryCode" value="<?php echo $book['categoryCode'] ?>"></td>
            </tr>
            <tr>
                <td>Mã nhà xuất bản:</td>
                <td><input type="text" name="companyCode" value="<?php echo $book['companyCode'] ?>"></td>
            </tr>
            <tr>
                <td>Mã ngôn ngữ:</td>
                <td><input type="text" name="languageCode" value="<?php echo $book['languageCode'] ?>"></td>
            </tr>
            <tr>
                <td>Mã vị trí:</td>
                <td><input type="text" name="locationCode" value="<?php echo $book['locationCode'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" style="width: 100px; height: 50px">OK</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = $book['bookCode'];
    $name = $_REQUEST['bookName'];
    $year = $_REQUEST['publishingYear'];
    $amount = $_REQUEST['amount'];
    $authorId = $_REQUEST['authorID'];
    $categoryCode = $_REQUEST['categoryCode'];
    $companyCode = $_REQUEST['companyCode'];
    $languageCode = $_REQUEST['languageCode'];
    $locationCode = $_REQUEST['locationCode'];

    $baseController->updateBook(
        $id,
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
