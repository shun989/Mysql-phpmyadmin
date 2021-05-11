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
    <fieldset style="width: 700px">
        <h2 style="text-align: center">Add Category</h2>
        <table>
            <tr>
                <td>Mã thể loại:</td>
                <td><input type="text" name="categoryCode" value="<?php echo $category['categoryCode'] ?>"></td>
            </tr>
            <tr>
                <td>Thể loại sách:</td>
                <td><input type="text" name="categoryName" value="<?php echo $category['categoryName'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" style="width: 80px; height: 50px;  margin: 20px;">OK</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $category['id'];
    $categoryCode = $_REQUEST['categoryCode'];
    $categoryName = $_REQUEST['categoryName'];

    $categoryController->updateCategory($id, $categoryCode, $categoryName);


    header("location:index.php?page=category");
}
$query = null;


