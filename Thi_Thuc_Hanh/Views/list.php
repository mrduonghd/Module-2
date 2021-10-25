<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:tan">
    <div class="row my-content">
        <div class="container  ">
            <div>
                <form action="index.php?page=search" method="POST">Nhap ten hang : <input type="text" name="pname"><button type="submit">Tim Kiem</button></form>
            </div>
            <a href="index.php?page=add"><button class="btn btn-primary mt-3 ">ADD</button></a>
            <div class="card text-center mt-3 mb-3">
                <div class="card-header ">
                    PRODUCTS
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Date Created</th>
                            <th>Description</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <?php foreach ($products as $key => $product) : ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $product['pName'] ?></td>
                            <td><?php echo $product['pType'] ?></td>
                            <td><?php echo $product['buyPrice'] ?> VND</td>
                            <td><?php echo $product['quantity'] ?></td>
                            <td><?php echo $product['dateCreated'] ?></td>
                            <td><?php echo $product['description'] ?></td>
                            <td><a onclick="return confirm('Are you sure?')" href="index.php?page=delete&id=<?php echo $product['pCode'] ?>" type="button" class="btn btn-danger">Delete</a></td>
                            <td><a href="index.php?page=update&id=<?php echo $product['pCode'] ?>" type="button" class="btn btn-warning">Update</a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>