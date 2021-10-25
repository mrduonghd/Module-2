<?php
require "src/View/layout/header.php";
?>


<div class="content">

    <table class="table table-striped " style="border-collapse: unset">
        <thead>
        <tr>
            <th >Danh mục sách</th>
            <th ></th>
            <th ></th>
            <th ></th>
        </tr>
        </thead>
        <tr>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Số lượng</th>
            <th>Giá</th>
        </tr>
        <?php foreach ($orderDetails as $key => $orderDetail): ?>
            <tr class="col">
<!--                <td class="col-1"><a style="text-decoration: none" href="index.php?page=order-details&order_id=--><?php //echo $order['order_id'] ?><!--">OD---><?php //echo $order['order_id'] ?><!--</a></td>-->
                <td class="col-3"><?php echo $orderDetail['book_id'] ?></td>
                <td class="col-3"><?php echo $orderDetail['book_name'] ?></td>
                <td class="col-2"><?php echo $orderDetail['quantity'] ?></td>
                <td class="col-2"><?php echo $orderDetail['sale_price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
//require "src/View/layout/pagination.php";
//require "src/View/layout/footer.php";
?>

