<table border="1px" style="text-align: center">
    <button><a href="index.php?page=add-category">add-category</a></button>
    <tr style="background-color: aqua">
        <th>STT</th>
        <th>Category Code</th>
        <th>Category Name</th>
        <th colspan="2">Option</th>
    </tr>
    <?php foreach ($category as $item): ?>
        <tr>
            <td><?php echo $item["id"]?></td>
            <td><?php echo $item["categoryCode"]?></td>
            <td><?php echo $item["categoryName"]?></td>
            <td><a href="index.php?page=edit-category&id=<?php echo $item['id']?>">Edit</a></td>
            <td><a href="index.php?page=delete-category&id=<?php echo $item['id']?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


