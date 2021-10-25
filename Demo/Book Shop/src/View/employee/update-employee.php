<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12">
    <form method="post" enctype="multipart/form-data" action="index.php?page=update-employee">

        <!--        form bootstrap      -->
        <div class="table-responsive ">
            <h1 class="text-primary text-center">Nhập thông tin nhân viên</h1>
            <div class="mb-3 col-12">
                <label for="add-name" class="form-label text-primary text-start">Tên nhân viên</label>
                <input name="employee_name" value="<?php echo $employee[0]['employee_name'] ?>" type="text" class="form-control" id="add-name" required>
                <input name="employee_id" value="<?php echo $employee[0]['employee_id'] ?>" type="hidden" class="form-control" id="add-name" required>
            </div>
            <div class="mb-3 col-12">
                <label for="add-birth" class="form-label text-primary text-start" >Ngày sinh</label>
                <input name="employee_birth" value="<?php echo $employee[0]['bithday'] ?>" type="hidden" class="form-control" id="add-birth" required>
            </div>
            <div class="mb-3 col-12">
                <label for="add-phone" class="form-label text-primary text-start" >Số điện thoại</label>
                <input name="employee_phone" value="<?php echo $employee[0]['employee_phone'] ?>" type="text" class="form-control" id="add-phone" required>
            </div>
            <div class="mb-3 col-12">
                <label for="add-address" class="form-label text-primary text-start" >Địa chỉ</label>
                <input name="employee_address" value="<?php echo $employee[0]['employee_address'] ?>" type="text" class="form-control" id="add-address" required>
            </div>
            <div class="mb-3 col-12">
                <label for="add-image" class="form-label text-primary text-start" >Ảnh</label>
                <input name="employee_image" type="file" class="form-control" id="add-image" >
                <input name="old_image" value="<?php echo $employee[0]['image'] ?>" type="hidden" class="form-control" id="add-image" required>
            </div>
            <div class="row add-book add-book-des">
                <button type="submit" class="btn btn-primary col-2">update</button>
            </div>
    </form>
</div>
<?php
//require "src/View/layout/pagination.php";
//require "src/View/layout/footer.php";
?>


