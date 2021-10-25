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
  <body style="background-color: tan;">
  <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center p-3 mb-2 bg-info text-white">
                UPDATE PRODUCT
            </div>
            <form class="p-3 mb-2 bg-dark text-white" action="" method="POST">
                <div class="col-6 container">
                    <label for="inputN" class="form-label">Name</label>
                    <input type="text" class="form-control text-center" id="inputN" name="name" value="<?php echo $product['pName'] ?>">

                </div>
                <div class="col-6 container">
                    <label for="inputD" class="form-label">Type</label>
                    <input type="text" class="form-control text-center" id="inputD" name="type" value="<?php echo $product['pType'] ?>">

                </div>
                <div class="col-6 container">
                    <label for="inputA" class="form-label">Price</label>
                    <input type="text" class="form-control text-center" id="inputA" name="price" value="<?php echo $product['buyPrice'] ?>">
                </div>
                <div class="col-6 container">
                    <label for="inputJ" class="form-label">Quantity</label>
                    <input type="text" class="form-control text-center" id="inputJ" name="quantity" value="<?php echo $product['quantity'] ?>">

                </div>
                <div class="col-6 container">
                    <label for="inputJs" class="form-label">Date Created</label>
                    <input type="date" class="form-control text-center" id="inputJs" name="date" value="<?php echo $product['dateCreated'] ?>">

                </div>
                <div class="col-6 container">
                    <label for="inputJ" class="form-label">Description</label>
                    <input type="text" class="form-control text-center" id="inputJ" name="description" value="<?php echo $product['description'] ?>">

                </div>
                <div class="col-1 container">
                    <button type="submit" onclick="return confirm('Do you want to update ?')" class="btn btn-warning mt-3 mb-3">Update</button>
                </div>

            </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
   
