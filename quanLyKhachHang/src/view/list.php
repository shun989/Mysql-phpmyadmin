<table border="1px">
    <tr style="background-color: aqua">
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th colspan="2">Option</th>
    </tr>
   <?php foreach ($customer as $item): ?>
   <tr>
       <td><?php echo $item["id"]?></td>
       <td><?php echo $item["name"]?></td>
       <td><?php echo $item["email"]?></td>
       <td><?php echo $item["address"]?></td>

   </tr>
    <?php endforeach; ?>
</table>
