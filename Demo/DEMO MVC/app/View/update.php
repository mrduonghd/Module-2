
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name :<input type="text" name="name" value="<?php echo $customer['name'] ?>">
        Email :<input type="text" name="email" value="<?php echo $customer['email'] ?>">
        Address :<input type="text" name="address" value="<?php echo $customer['address'] ?>">
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>