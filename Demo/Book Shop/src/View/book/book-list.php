<?php
    require "src/View/layout/header.php";
?>
<div class="content">

    <!--        side bar           -->
<!--    <div class="row sidebar col-lg-3">-->
<!--        <div class="col ">-->
<!--            <div class="categories">-->
<!--                <div class="list-group">-->
<!--                    <button  class=" btn btn-dark">A simple default list group item</button>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!--      my-content      -->
    <div class="row my-content col" >
        <?php foreach ($products as $key => $product) : ?>
            <div class="col-lg-2 col-md-6 mb-3">
                <div class="card h-100">
                    <a href="index.php?page=book-details&id=<?php echo $product['book_id'] ?>"><img class="card-img-top img-fluid" src="images/<?php echo $product['image'] ?>" alt=""></a>

                    <div class="card-body text-center">
                        <p class="card-title card-book text-break" style="font-size: 12px"><?php echo $product['book_name'] ?></p>
                        <p class="card-title card-book text-break" style="font-size: 12px"><?php echo $product['author_name'] ?></p>
                        <p class="card-title card-book card-book-price "><?php echo $product['price_sale'].' VND' ?></p>
                        <div class="row add-book">
                            <div class="mb-3 col-6 d-grid gap-2">
                                <a  class="btn btn-warning btn-sm" href="index.php?page=update-book&id=<?php echo $product['book_id'] ?>" >update</a>
                            </div>
                            <div class="mb-3 col-6 d-grid gap-2">
                                <a  class="btn btn-danger btn-sm" onclick="return confirm(' co muon xoa dau sach <?php echo $product['book_name'] ?> ko?')" href="index.php?page=delete-book&id=<?php echo $product['book_id'] ?>" >delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
    require "src/View/layout/pagination.php";
    require "src/View/layout/footer.php";
?>
<?php //foreach ($products as $key => $product) : ?>
<!--<div class="col-lg-3 col-md-6 mb-4">-->
<!--    <div class="card h-100">-->
<!--        <a href="index.php?page=book-details&id=--><?php //echo $product['book_id'] ?><!--"><img class="card-img-top img-fluid" src="images/--><?php //echo $product['image'] ?><!--" alt=""></a>-->
<!---->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title card-book">--><?php //echo $product['book_name'] ?><!--</h5>-->
<!--            <h6 class="card-title card-book">--><?php //echo $product['author_name'] ?><!--</h6>-->
<!--            <h6 class="card-title card-book card-book-price">--><?php //echo $product['price_sale'].' VND' ?><!--</h6>-->
<!--        </div>-->
<!--        <div class="card-footer">-->
<!--            <a href="#" class="btn btn-primary d-grid gap-2">Mua</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php //endforeach; ?>