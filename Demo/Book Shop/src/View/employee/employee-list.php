
<?php
require "src/View/layout/header.php";
?>
<div>
    <a  style="margin: 15px 0 0 5px" class="btn btn-primary btn-sm" href="index.php?page=add-employee" >Thêm nhân viên</a>
</div>

<div class="content">
    <table class="table table-striped " style="border-collapse: unset">
        <tr>
            <th>ID</th>
            <th>Tên nhân viên</th>
            <th>Ngày sinh</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr class="col">
                <td class="col-1"><?php echo $employee['employee_id'] ?></td>
                <td class="col-2"><?php echo $employee['employee_name'] ?></td>
                <td class="col-2"><?php echo $employee['bithday'] ?></td>
                <td class="col-2"><?php echo $employee['employee_phone'] ?></td>
                <td class="col-2"><?php echo $employee['employee_address'] ?></td>
                <td class="col-1">
                    <div>
                        <img style="width: 50px;height: 50px" class="card-img-top img-fluid" src="images/<?php echo $employee['image'] ?>" alt="...">
                    </div>
                </td>
                <td style="text-align: center; align-items: center " class="col-2">
                    <div>
                        <a  style="margin: 0 0.5rem" class="btn btn-warning btn-sm" href="index.php?page=update-employee&employee_id=<?php echo $employee['employee_id'] ?>" >update</a>
                        <a  onclick="return confirm(' Xác nhận xóa nhân viên <?php echo $employee['employee_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" href="index.php?page=delete-employee&employee_id=<?php echo $employee['employee_id'] ?>" >delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
//require "src/View/layout/pagination.php";
//require "src/View/layout/footer.php";
?>
