<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12">
    <form method="post" enctype="multipart/form-data" action="index.php?page=update-author">

        <!--        form bootstrap      -->
        <div class="table-responsive ">
            <h1 class="text-primary text-center">Cập nhật thông tin tác giả</h1>
            <div class="mb-3 col-12">
                <label for="add-author-name" class="form-label text-primary text-start">Tên tác giả</label>
                <input name="author_name" type="text" class="form-control" id="add-author-name" required value="<?php echo $author[0]['author_name'] ?>">
                <input name="author_id" type="hidden" class="form-control" id="add-author-name" required value="<?php echo $author[0]['author_id'] ?>">
            </div>
            <div class="mb-3 col-12">
                <label for="add-author-date" class="form-label text-primary">Năm sinh - Năm chết</label>
                <input name="birth_death" type="text" class="form-control" id="add-author-date" placeholder="VD: 18xx - 19xx" value="<?php echo $author[0]['birth_death'] ?>">
            </div>
            <div class="mb-3 col-12">
                <label for="add-website" class="form-label text-primary text-start" >Website</label>
                <input name="author_website" type="text" class="form-control" id="add-website" value="<?php echo $author[0]['website'] ?>">
            </div>
            <div class="mb-3 col-12">
                <label for="formFile" class="form-label text-primary">Ảnh</label>
                <input name="author_image" class="form-control" type="file" id="formFile">
                <input name="old_image" class="form-control" type="hidden" value="<?php echo $author[0]['author_image'] ?>">
            </div>
            <div class="row mb-3">
                <label for="add-des" class="form-label text-primary text-start">Giới thiệu tác giả</label>
                <textarea name="author_des" class="add-book-des form-control" id="add-des" rows="3"><?php echo $author[0]['description'] ?></textarea>
            </div>
            <div class="row add-book" style="margin: 1rem 0">
                <button type="submit" class="btn btn-primary col-2">UPDATE</button>
            </div>
    </form>
</div>
<?php
//require "src/View/layout/pagination.php";
require "src/View/layout/footer.php";
?>

