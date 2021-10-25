<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12">
    <form method="post" enctype="multipart/form-data" action="index.php?page=add-category">

        <!--        form bootstrap      -->
        <div class="table-responsive ">
            <h1 class="text-primary text-center">Thông tin thể loại</h1>
            <div class="mb-3 col-12">
                <label for="add-name" class="form-label text-primary text-start">Tên thể loại</label>
                <input name="category_name" type="text" class="form-control" id="add-name" required>
            </div>
            <div class="mb-3 col-12">
                <label for="add-website" class="form-label text-primary text-start" >Website</label>
                <input name="category_web" type="text" class="form-control" id="add-website" required>
            </div>
            <div class="row mb-3">
                <label for="add-des" class="form-label text-primary text-start">Mô tả</label>
                <textarea name="category_des" class="add-book-des form-control" id="add-des" rows="3" required></textarea>
            </div>
            <div class="row add-book add-book-des">
                <button type="submit" class="btn btn-primary col-2">Thêm mới</button>
            </div>
    </form>
</div>
<?php
//require "src/View/layout/pagination.php";
//require "src/View/layout/footer.php";
?>

