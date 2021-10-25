<?php
require "src/View/layout/header.php";
?>

<div class="content">
    <table class="table table-striped " style="border-collapse: unset">
        <tr>
            <th>Tên tác giả</th>
            <th>Năm sinh</th>
            <th>website</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
        <?php foreach ($authors as $author): ?>
            <tr>
                <td><a style="text-decoration: none" href="index.php?page=author-details&author_id=<?php echo $author['author_id'] ?>"><?php echo $author['author_name'] ?></a></td>
                <td><?php echo $author['birth_death'] ?></td>
                <td><a target="_blank" style="text-decoration: none" href="<?php echo $author['website'] ?>"><?php echo $author['website'] ?></a></td>
                <td><img src="images/<?php echo $author['author_image'] ?>" alt="" style="width: 50px; height: 50px"></td>
<!--                <td>--><?php //echo $author['description'] ?><!--</td>-->
                <td style="text-align: center">
                    <div>
                    <a  style="margin: 0 0.5rem" class="btn btn-warning btn-sm" href="index.php?page=update-author&author_id=<?php echo $author['author_id'] ?>" >update</a>
                    <a  onclick="return confirm(' Xác nhận xóa tác giả <?php echo $author['author_name'] ?>')" style="margin: 0 0.5rem" class="btn btn-danger btn-sm" href="index.php?page=delete-author&author_id=<?php echo $author['author_id'] ?>" >delete</a>
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
