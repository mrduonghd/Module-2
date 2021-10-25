<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once 'public/js/Layouts/header.php';
    ?>

    <div class="row my-content " style="background-color:tan">
        <div class="card mb-3 mt-3 container" style="border: none;">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 mb-3 mt-6" style="margin-top: 1.2vw">
                    <div>

                        <img class="card-img-top img-fluid" src="images/<?php echo $product['image'] ?>" alt="...">
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 mb-3">
                    <div class="card-body">
                        <table class="table-striped table">
                            <tr>
                                <th colspan="2">
                                    <h5 class="card-title text-center"><?php echo $product['pName'] ?></h5>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <p class="card-text">Vendor</p>
                                </th>
                                <td>
                                    <p class="card-text"><?php echo $product['pVendor'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p class="card-text">Description</p>
                                </th>
                                <td>
                                    <p class="card-text"><?php echo $product['pDescription'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p class="card-text">Price</p>
                                </th>
                                <td>
                                    <p class="card-text text-danger"><?php echo $product['buyPrice'] ?> VND</p>
                                </td>
                            </tr>
                            
                        </table>
                        <!--                    <p class="card-text">ISBN</p>-->
                        <!--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'public/js/Layouts/footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>