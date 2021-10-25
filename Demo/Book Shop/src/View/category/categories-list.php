<?php
require "src/View/layout/header.php";
?>
<div>
    <a  style="margin: 15px 0 0 5px" class="btn btn-primary btn-sm" href="index.php?page=add-category" >Thêm thể loại</a>
</div>

<div class="content">
    <table class="table table-striped " style="border-collapse: unset">
        <tr>
            <th>Tên thể loại</th>
            <th>Mô tả</th>
            <th></th>
        </tr>
        <?php foreach ($categories as $category): ?>
            <tr class="col">
                <td class="col-2"><a style="text-decoration: none" href="<?php echo $category['link'] ?>"><?php echo $category['category_name'] ?></a></td>
                <td class="col-9"><?php echo $category['category_des'] ?></td>
                <td style="text-align: center; align-items: center " class="col-1">
                    <div>
<!--                        <a  style="margin: 0 0.5rem" class="btn btn-warning btn-sm" href="index.php?page=update-author&author_id=--><?php //echo $author['author_id'] ?><!--" >update</a>-->
                        <a  onclick="return confirm(' Xác nhận xóa thể loại <?php echo $category['category_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" href="index.php?page=delete-category&category_id=<?php echo $category['category_id'] ?>" >delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
//require "src/View/layout/pagination.php";
require "src/View/layout/footer.php";
?>
