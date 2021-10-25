<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12">
    <form method="post" enctype="multipart/form-data">

        <!--        form bootstrap      -->
        <div class="table-responsive ">
            <h1 class="text-primary text-center">Cập nhật thông tin sách</h1>

            <div class="row add-book">
                <div class="mb-3 col-8">
                    <input type="hidden" name="book_id" value="<?php echo $product[0]['book_id'] ?>">
                    <label for="add-book-name" class="form-label text-primary text-start">Tên sách</label>
                    <input name="book_name" type="text" class="form-control" id="add-book-name" value="<?php echo $product[0]['book_name'] ?>" required>
                </div>
                <div class="mb-3 col-4">
                    <label for="add-isbn" class="form-label text-primary text-start">isbn</label>
                    <input name="isbn" type="text" class="form-control" id="add-isbn" value="<?php echo $product[0]['isbn'] ?>" required>
                </div>
            </div>
            <div class="row add-book">
                <div class="mb-3 col-4">
                    <label for="add-author" class="form-label text-primary text-start">Tác giả</label>
                    <select name="author_id" class="form-select" aria-label="Default select example" id="add-author">
                        <?php foreach ($authors as $author): ?>
                            <option <?php if ($author['author_name'] ==$product[0]['author_name']): ?> selected <?php endif; ?> value="<?php echo $author['author_id']?>"><?php echo $author['author_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <label for="add-category" class="form-label text-primary text-start">Thể loại</label>
                    <select name="category_id" class="form-select" aria-label="Default select example" id="add-category">
                        <?php foreach ($categories as $category): ?>
                            <option <?php if ($category['category_name'] ==$product[0]['category_name']): ?> selected <?php endif; ?> value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <label for="add-publisher" class="form-label text-primary text-start">Nhà xuất bản</label>
                    <select name="publisher_id" class="form-select" aria-label="Default select example" id="add-publisher">
                        <?php foreach ($publishers as $publisher): ?>
                            <option <?php if ($publisher['publisher_name'] ==$product[0]['publisher_name']): ?> selected <?php endif; ?> value="<?php echo $publisher['publisher_id']?>"><?php echo $publisher['publisher_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row add-book">
                <div class="row mb-3 col-9">
                    <div class="mb-3 col-4">
                        <label for="add-page-number" class="form-label text-primary text-start">Số trang</label>
                        <input name="page_number" type="number" class="form-control" id="add-page-number" value="<?php echo $product[0]['page_number'] ?>" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-quantity" class="form-label text-primary text-start">Số lượng</label>
                        <input name="quantity" type="number" class="form-control" id="add-quantity" value="<?php echo $product[0]['quantity'] ?>" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="add-price-sale" class="form-label text-primary text-start">Giá bán</label>
                        <input name="price_sale" type="number" class="form-control" id="add-price-sale" value="<?php echo $product[0]['price_sale'] ?>" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="add-date-publication" class="form-label text-primary">Ngày xuất bản</label>
                        <input name="date_of_publication" type="text" class="form-control" id="add-date-publication" value="<?php echo $product[0]['year_of_publication'] ?>">
                        <input type="hidden" name="update_date" value="<?php echo date("Y-m-d");?>">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="formFile" class="form-label text-primary">Ảnh bìa</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        <input type="hidden" name="old_image" value="<?php echo $product[0]['image'] ?>">
                    </div>
                </div>

                <div class="mb-3 col-3">
                    <label for="old-img" class="form-label text-primary">Ảnh cũ</label>
<!--                    <input name="image" class="form-control" type="file" id="formFile">-->
                    <img style="height: 250px" class="card-img-top img-fluid" src="images/<?php echo $product[0]['image'] ?>" id="old-img">
<!--                    <input type="hidden" name="old_image" value="--><?php //echo $product[0]['image'] ?><!--">-->
                </div>
            </div>
            <!--                <div class="row">-->
            <div class="row mb-3 add-book">
                <label for="add-des" class="form-label text-primary text-start">Giới thiệu sách</label>
                <textarea name="description" class="add-book-des form-control" id="add-des" rows="3"><?php echo $product[0]['description'] ?></textarea>
            </div>
            <!--            </form>-->
            <!--        </div>-->
            <div class="row add-book add-book-des">
                <button type="submit" class="btn btn-primary col-2">UPDATE</button>
            </div>
    </form>
</div>
<?php
require "src/View/layout/pagination.php";
require "src/View/layout/footer.php";
?>
<!--<body>-->
<!--<form method="post" enctype="multipart/form-data">-->
<!--    <input type="hidden" name="book_id" value="--><?php //echo $product[0]['book_id'] ?><!--"><br>-->
<!--    isbn:-->
<!--    <input type="text" name="isbn" value="--><?php //echo $product[0]['isbn'] ?><!--"><br>-->
<!--    ten sach:-->
<!--    <input type="text" name="book_name" value="--><?php //echo $product[0]['book_name'] ?><!--"><br>-->
<!--    mo ta:-->
<!--    <textarea name="description" cols="30" rows="10" >--><?php //echo $product[0]['description'] ?><!--</textarea><br>-->
<!--    so trang-->
<!--    <input type="number" name="page_number" value="--><?php //echo $product[0]['page_number'] ?><!--"><br>-->
<!--    tac gia:-->
<!--    <select name="author_id" >-->
<!--        --><?php //foreach ($authors as $author): ?>
<!--            <option --><?php //if ($author['author_name'] ==$product[0]['author_name']): ?><!-- selected --><?php //endif; ?><!-- value="--><?php //echo $author['author_id']?><!--">--><?php //echo $author['author_name'] ?><!--</option>-->
<!--        --><?php //endforeach; ?>
<!--    </select><br>-->
    <!--    <input type="text" name="author_name" value="--><?php //echo $product[0]['author_name'] ?><!--"><br>-->
<!--    the loai:-->
<!--    <select name="category_id" >-->
<!--        --><?php //foreach ($categories as $category): ?>
<!--            <option --><?php //if ($category['category_name'] ==$product[0]['category_name']): ?><!-- selected --><?php //endif; ?><!-- value="--><?php //echo $category['category_id']?><!--">--><?php //echo $category['category_name'] ?><!--</option>-->
<!--        --><?php //endforeach; ?>
<!--    </select><br>-->
<!--    nha xuat ban:-->
<!--    <select name="publisher_id" >-->
<!--        --><?php //foreach ($publishers as $publisher): ?>
<!--            <option --><?php //if ($publisher['publisher_name'] ==$product[0]['publisher_name']): ?><!-- selected --><?php //endif; ?><!-- value="--><?php //echo $publisher['publisher_id']?><!--">--><?php //echo $publisher['publisher_name'] ?><!--</option>-->
<!--        --><?php //endforeach; ?>
<!--    </select><br>-->
<!--    so luong sach:-->
<!--    <input type="number" name="quantity" value="--><?php //echo $product[0]['quantity'] ?><!--"><br>-->
<!--    gia ban:-->
<!--    <input type="number" name="price_sale" value="--><?php //echo $product[0]['price_sale'] ?><!--"><br>-->
<!--    nam xuat ban:-->
<!--    <input type="date" name="year_of_publication" value="--><?php //echo $product[0]['year_of_publication'] ?><!--"><br>-->
<!--    ngay update:-->
    <input type="date" name="update_date" value="<?php echo $product[0]['update_date'] ?>" required ><br>
<!--    hinh anh:-->
<!--    <input type="file" name="image" ><br>-->
<!--    <input type="hidden" name="old_image" value="--><?php //echo $product[0]['image'] ?><!--">-->
<!--    <input type="" name="category_name" value="--><?php //echo $product[0]['category_name'] ?><!--"><br>-->
<!--    <input type="" name="publisher_name" value="--><?php //echo $product[0]['publisher_name'] ?><!--"><br>-->
<!---->
<!--    <button type="submit">update</button>-->
<!--</form>-->
<!--</body>-->
