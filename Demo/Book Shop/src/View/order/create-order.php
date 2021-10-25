<?php
require "src/View/layout/header.php";
?>

<div class="content row col-12" >
    <form method="post" action="index.php?page=create-order">

        <!--        form bootstrap      -->
<!--        <div class="table-responsive row">-->
            <h1 class="text-primary text-center">Hóa đơn</h1>
            <div class="mb-3 col row" style="margin-top: 30px">
                <div class="mb-3 col-6">
                    <label for="add-customer" class="form-label text-primary text-start">Khách hàng</label>
                    <select name="customer_id" class="form-select" aria-label="Default select example" id="add-customer">
                        <option selected>----</option>
                        <?php foreach ($customers as $key => $customer): ?>
                            <option value="<?php echo $customer['customer_id']?>"><?php echo $customer['customer_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
<!--                <div class="mb-3 col-12">-->
<!--                    <label for="add-name" class="form-label text-primary text-start">Nhân viên</label>-->
<!--                    <input name="employee_id" type="number" class="form-control" id="add-name" required>-->
<!--                </div>-->
                <input name="order_date" type="hidden" class="form-control" id="add-name" value="<?php echo date('Y-m-d') ?>">
                <div class="mb-3 col-6">
                    <label for="add-employee" class="form-label text-primary text-start">Nhân viên</label>
                    <select name="employee_id" class="form-select" aria-label="Default select example" id="add-employee">
                        <option selected>----</option>
                        <?php foreach ($employees as $key => $employee): ?>
                            <option value="<?php echo $employee['employee_id']?>"><?php echo $employee['employee_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class=" mb-3 col row" >
                <label class="form-label text-primary text-start" >Chọn sách</label>
                <?php foreach ($books as $key => $book): ?>
                    <div class="col col-4" style="margin-bottom: 5px">
                        <input name="books[]" class="form-check-input" type="checkbox" value="<?php echo $book['book_id'] ?>" id="<?php echo $book['book_id'] ?>">
                        <label class="form-check-label" for="<?php echo $book['book_id'] ?>">
                            <?php echo $book['book_name'] ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row add-book" style="margin-top: 50px;">
                <button type="submit" class="btn btn-primary col-2">Tạo hóa đơn</button>
            </div>

    </form>
</div>
<?php
//require "src/View/layout/pagination.php";
//require "src/View/layout/footer.php";
?>

