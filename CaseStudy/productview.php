<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/a.css">
  </head>
  <body>
<?php
include_once 'public/js/Layouts/header.php';
include_once 'public/js/Layouts/slide.php';

use App\Models\ProductModel;

require __DIR__ . '/vendor/autoload.php';

$productModel = new ProductModel;
$products = $productModel->getAll();

?>
<div id="main" class="container">
    <div class="product">
        <div class="row mt-3 text-center" >
            <?php foreach ($products as $product): ?>
            <div class="col-4 mb-3" >
                <div class="card">
                    <a href="index.php?page=detail&id=<?php echo $product['pCode'] ?>"><img src="public/image/dt.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['pName'] ?></h5>
                        <p class="card-text"><?php echo $product['pVendor'] ?></p>
                        <p class="text-danger"><b><?php echo $product['buyPrice']?> VND</b></p>
                        <a href="index.php?page=detail&id=<?php echo $product['pCode'] ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php endForEach ?>
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