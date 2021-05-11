<table border="1px" style="text-align: center">
    <button><a href="index.php?page=add-book">add-book</a></button>
    <tr style="background-color: aqua">
        <th>Book Code</th>
        <th>Book Name</th>
        <th>Publishing Year</th>
        <th>Amount</th>
        <th>Author ID</th>
        <th>Category Code</th>
        <th>Company Code</th>
        <th>Language Code</th>
        <th>Location Code</th>
        <th colspan="2">Option</th>
    </tr>
    <?php foreach ($book as $item): ?>
        <tr>
            <td><?php echo $item["bookCode"]?></td>
            <td><?php echo $item["bookName"]?></td>
            <td><?php echo $item["publishingYear"]?></td>
            <td><?php echo $item["amount"]?></td>
            <td><?php echo $item["authorID"]?></td>
            <td><?php echo $item["categoryCode"]?></td>
            <td><?php echo $item["companyCode"]?></td>
            <td><?php echo $item["languageCode"]?></td>
            <td><?php echo $item["locationCode"]?></td>
            <td><a href="index.php?page=edit-book&bookCode=<?php echo $item['bookCode']?>">Edit</a></td>
            <td><a href="index.php?page=delete-book&bookCode=<?php echo $item['bookCode']?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

