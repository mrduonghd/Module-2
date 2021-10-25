<body>
<!--<table>-->
<!--    <tr>-->
<!--        <th>category-Id</th>-->
<!--        <th>category-Name</th>-->
<!--        <th>category-Description</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($categories as $category): ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $category['category_id']?><!--</td>-->
<!--            <td>--><?php //echo $category['category_name']?><!--</td>-->
<!--            <td>--><?php //echo $category['category_des']?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->
<form action="index.php" method="post">
    <select name="category_id" id="" required="">
        <option value="">chon tac gia</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['category_id']?>"><?php echo $category['category_name'] ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">xem the loai</button>
</form>
</body>

