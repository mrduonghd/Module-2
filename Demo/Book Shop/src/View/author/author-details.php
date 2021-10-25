
<?php
    require "src/View/layout/header.php";
?>
    <div class="row my-content col">
            <div class="card mb-3 " style="border: none;">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6 mb-3 mt-6" style="margin-top: 1.2vw">
                        <div>

                            <img class="card-img-top img-fluid" src="images/<?php echo $author[0]['author_image'] ?>" alt="..." style="height: 350px">
                        </div>
                        <div class="row add-book" style="margin-top: 1.5vw">
                            <div class="mb-3 col-12 d-grid gap-2">
                                <a  class="btn btn-warning" href="index.php?page=update-author&author_id=<?php echo $author[0]['author_id'] ?>" >update</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 mb-3">
                        <div class="card-body">
                            <table class="table-striped table">
                                <tr>
                                    <th colspan="2"><h5 class="card-title text-center"><?php echo $author[0]['author_name'] ?></h5></th>
                                </tr>
                                <tr>
                                    <th><p class="card-text">Năm sinh</p></th>
                                    <th ><p class="card-text"><?php echo $author[0]['birth_death'] ?></p></th>
                                </tr>
                                <tr>
                                    <th><p class="card-text">Website</p></th>
                                    <td><p class="card-text "><a style="text-decoration: none" href="<?php echo $author[0]['website'] ?>"><?php echo $author[0]['website'] ?></a></p></td>
                                </tr>
                                <tr>
                                    <th><p class="card-text">Thông tin</p></th>
                                    <td><p class="card-text"><?php echo $author[0]['description'] ?></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<table class="table table-striped " style="border-collapse: unset">
    <tr>
        <th>Tên sách</th>
        <th>Tác giả</th>
        <th>Thể loại</th>
        <th>giá</th>
        <th>Ảnh</th>
        <th></th>
    </tr>
    <?php foreach ($authorBooks as $key =>$authorBook): ?>
        <tr>
            <td><a style="text-decoration: none" href="index.php?page=book-details&id=<?php echo $authorBook['book_id'] ?>"><?php echo $authorBook['book_name'] ?></a></td>
            <td><?php echo $authorBook['author_name'] ?></td>
            <td><?php echo $authorBook['category_name'] ?></td>
            <td><?php echo $authorBook['price_sale'] ?></td>
            <td><img src="images/<?php echo $authorBook['image'] ?>" alt="" style="width: 50px; height: 50px"></td>
            <td style="text-align: center">
                <div>
                    <a  style="margin: 0 0.5rem" class="btn btn-warning btn-sm" href="index.php?page=update-book&id=<?php echo $authorBook['book_id'] ?>" >update</a>
                    <a  onclick="return confirm(' Xác nhận đầu sách <?php echo $authorBook['book_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" href="index.php?page=delete-book&id=<?php echo $authorBook['book_id'] ?>" >delete</a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
require "src/View/layout/footer.php";
?>