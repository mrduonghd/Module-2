<?php
require "src/View/layout/header.php";
?>
<div>
    <a  style="margin: 15px 0 0 5px" class="btn btn-primary btn-sm" href="index.php?page=create-order" >Tạo hóa đơn</a>
</div>

<div class="content">
    <table class="table table-striped " style="border-collapse: unset">
        <tr>
            <th>order_id</th>
            <th>Khách hàng</th>
            <th>Nhân viên</th>
            <th>Ngày mua</th>
            <th>Tổng tiền</th>
            <th></th>
        </tr>
        <?php foreach ($orders as $key => $order): ?>
            <tr class="col">
                <td class="col-1"><a style="text-decoration: none" href="index.php?page=order-details&order_id=<?php echo $order['order_id'] ?>">OD-<?php echo $order['order_id'] ?></a></td>
                <td class="col-3"><?php echo $order['customer_name'] ?></td>
                <td class="col-3"><?php echo $order['employee_name'] ?></td>
                <td class="col-2"><?php echo $order['order_date'] ?></td>
                <td class="col-2"><?php echo $order['total'] ?></td>
                <td style="text-align: center; align-items: center " class="col-1">
                    <div>
                        <a  onclick="return confirm(' Xác nhận xóa hóa đơn <?php echo $order['category_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" href="index.php?page=delete-order&order_id=<?php echo $order['order_id'] ?>" >delete</a>
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
