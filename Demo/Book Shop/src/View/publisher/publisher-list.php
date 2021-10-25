<?php
require "src/View/layout/header.php";
?>
<!--<div>-->
<!--    <a  style="margin: 15px 0 0 5px" class="btn btn-primary btn-sm">Thêm nhà xuất bản</a>-->
<!--</div>-->

<div class="content">
    <table class="table table-striped " style="border-collapse: unset">
        <tr>
            <th>Mã NXB</th>
            <th>Tên NXB</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th></th>
        </tr>
        <?php foreach ($publishers as $key => $publisher): ?>
            <tr class="col">
                <td class="col-1"><?php echo $publisher['publisher_id'] ?></td>
                <td class="col-3"><?php echo $publisher['publisher_name'] ?></td>
                <td class="col-4"><?php echo $publisher['publisher_address'] ?></td>
                <td class="col-3"><?php echo $publisher['publisher_email'] ?></td>
                <td style="text-align: center; align-items: center " class="col-1">
                    <div>
                        <a onclick="return confirm(' Xác nhận xóa NXB <?php echo $publisher['publisher_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" >delete</a>
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

