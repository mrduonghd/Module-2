<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12">
    <form method="post" enctype="multipart/form-data">

        <!--        form bootstrap      -->
        <div class="table-responsive ">
            <h1 class="text-primary text-center">Nhập thông tin sách</h1>

                <div class="row add-book">
                    <div class="mb-3 col-8">
                        <label for="add-book-name" class="form-label text-primary text-start">Tên sách</label>
                        <input name="book_name" type="text" class="form-control" id="add-book-name" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-isbn" class="form-label text-primary text-start" >isbn</label>
                        <input name="isbn" type="text" class="form-control" id="add-isbn" value="<?php echo '978-'.rand(100,999).'-'.rand(10,99).'-'.rand(1000,9999).'-'.rand(0,9) ?>" required>
                    </div>
                </div>
                <div class="row add-book">
                    <div class="mb-3 col-4">
                        <label for="add-author" class="form-label text-primary text-start">Tác giả</label>
                        <select name="author_id" class="form-select" aria-label="Default select example" id="add-author" required>
                            <option selected>Chọn tác giả</option>
                            <?php foreach ($authors as $author): ?>
                                <option value="<?php echo $author['author_id']?>"><?php echo $author['author_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-category" class="form-label text-primary text-start">Thể loại</label>
                        <select name="category_id" class="form-select" aria-label="Default select example" id="add-category" required>
                            <option selected>Chọn thể loại</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-publisher" class="form-label text-primary text-start">Nhà xuất bản</label>
                        <select name="publisher_id" class="form-select" aria-label="Default select example" id="add-publisher">
                            <option selected>Chọn nhà xuất bản</option>
                            <?php foreach ($publishers as $publisher): ?>
                                <option value="<?php echo $publisher['publisher_id']?>"><?php echo $publisher['publisher_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row add-book">
                    <div class="mb-3 col-4">
                        <label for="add-page-number" class="form-label text-primary text-start">Số trang</label>
                        <input name="page_number" type="number" class="form-control" id="add-page-number" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-quantity" class="form-label text-primary text-start">Số lượng</label>
                        <input name="quantity" type="number" class="form-control" id="add-quantity">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-price-sale" class="form-label text-primary text-start">Giá bán</label>
                        <input name="price_sale" type="number" class="form-control" id="add-price-sale" required>
                    </div>
                </div>
                <div class="row add-book">
                    <div class="mb-3 col-6">
                        <label for="add-date-publication" class="form-label text-primary">Ngày xuất bản</label>
                        <input name="date_of_publication" type="date" class="form-control" id="add-date-publication">
                        <input name="update_date" type="hidden" class="form-control" id="add-date-publication" value="<?php echo date('Y-m-d')?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="formFile" class="form-label text-primary">Ảnh bìa</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mb-3 add-book">
                    <label for="add-des" class="form-label text-primary text-start">Giới thiệu sách</label>
                    <textarea name="description" class="add-book-des form-control" id="add-des" rows="3"></textarea>
                </div>
                <div class="row add-book add-book-des">
                    <button type="submit" class="btn btn-primary col-2">Thêm mới</button>
                </div>
    </form>
</div>
<?php
require "src/View/layout/pagination.php";
require "src/View/layout/footer.php";
?>