<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php?page=add">ADD</a>
    <a href="index.php?page=logout">LOGOUT</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Operation</th>
        </tr>
        <?php foreach ($customers as $key => $customer) : ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $customer['name'] ?></td>
                <td><?php echo $customer['email'] ?></td>
                <td><?php echo $customer['address'] ?></td>
                <td><a href="index.php?page=delete&id=<?php echo $customer['id'] ?>">Delete</a> | <a href="index.php?page=update&id=<?php echo $customer['id'] ?>">Update</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>