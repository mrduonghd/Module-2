<?php
    require "src/View/layout/header.php";
?>
<div class="row my-content col">
    <?php foreach ($products as $key => $product): ?>
    <div class="card mb-3 " style="border: none;">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 mb-3 mt-6" style="margin-top: 1.2vw">
                <div>

                    <img class="card-img-top img-fluid" src="images/<?php echo $product['image'] ?>" alt="...">
                </div>
                <div class="row add-book" style="margin-top: 1.5vw">
                    <div class="mb-3 col-12 d-grid gap-2">
                        <a  class="btn btn-warning" href="index.php?page=update-book&id=<?php echo $product['book_id'] ?>" >update</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 mb-3">
                <div class="card-body">
                    <table class="table-striped table">
                        <tr>
                            <th colspan="2"><h5 class="card-title text-center"><?php echo $product['book_name'] ?></h5></th>
                        </tr>
                        <tr>
                            <th><p class="card-text">ISBN</p></th>
                            <td><p class="card-text"><?php echo $product['isbn'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Tác giả</p></th>
                            <td><p class="card-text"><?php echo $product['author_name'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Thể loại</p></th>
                            <td><p class="card-text"><?php echo $product['category_name'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Số trang</p></th>
                            <td><p class="card-text"><?php echo $product['page_number'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Số Lượng</p></th>
                            <td><p class="card-text"><?php echo $product['quantity'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Giá</p></th>
                            <td><p class="card-text"><?php echo $product['price_sale'] ?> VND</p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Nhà xuất bản</p></th>
                            <td><p class="card-text"><?php echo $product['publisher_name'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Ngày xuất bản</p></th>
                            <td><p class="card-text"> <?php echo $product['year_of_publication'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Ngày cập nhật</p></th>
                            <td><p class="card-text"> <?php echo $product['update_date'] ?></p></td>
                        </tr>
                        <tr>
                            <th><p class="card-text">Mô tả sách</p></th>
                            <td><p class="card-text"><?php echo $product['description'] ?></p></td>
                        </tr>
                    </table>
<!--                    <p class="card-text">ISBN</p>-->
<!--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php
require "src/View/layout/pagination.php";
require "src/View/layout/footer.php";
?>

