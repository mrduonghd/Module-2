<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<style>

    .add-book{
        margin-left: 0;
        margin-right: 0;
        /*background-color: #55acee;*/
        /*display: flex;*/
        /*flex-wrap: wrap;*/
    }
</style>
<body>
        <!---      bang list sach -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Nhà sản xuât</th>
                <th scope="col">Ảnh Bìa</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row add-book">
            <div class="mb-3 col-4">
                <label for="add-page-number" class="form-label text-primary text-start">Số trang</label>
                <input name="page_number" type="number" class="form-control" id="add-page-number">
            </div>
            <div class="mb-3 col-4">
                <label for="add-quantity" class="form-label text-primary text-start">Số lượng</label>
                <input name="quantity" type="number" class="form-control" id="add-quantity">
            </div>
            <div class="mb-3 col-4">
                <label for="add-price-sale" class="form-label text-primary text-start">Giá bán</label>
                <input name="price_sale" type="number" class="form-control" id="add-price-sale">
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
<!--                --><?php //echo $data; ?>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
            </ul>
        </nav>
<!--        <div class="row">-->
<!--            <div class="mb-3 col-6">-->
<!--                <label for="add-date-publication" class="form-label text-primary">Ngày xuất bản</label>-->
<!--                <input name="date_of_publication" type="date" class="form-control" id="add-date-publication">-->
<!--            </div>-->
<!--            <div class="mb-3 col-6">-->
<!--                <label for="formFile" class="form-label text-primary">Ảnh bìa</label>-->
<!--                <input name="image" class="form-control" type="file" id="formFile">-->
<!--            </div>-->
<!--        </div>-->
        <!--                <div class="row">-->
<!--        <div class="mb-3">-->
<!--            <label for="add-des" class="form-label text-primary text-start">Giới thiệu sách</label>-->
<!--            <textarea name="description" class="form-control" id="add-des" rows="3"></textarea>-->
<!--        </div>-->


<!--<div class="table-responsive add-book ">-->
<!--    <h1 class="text-primary text-center">Nhập thông tin sách</h1>-->
<!--    <form method="post" enctype="multipart/form-data">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="mb-3 col-8">-->
<!--                <label for="add-book-name" class="form-label text-primary">Tên sách</label>-->
<!--                <input name="book_name" type="text" class="form-control" id="add-book-name">-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-isbn" class="form-label text-primary">isbn</label>-->
<!--                <input name="isbn" type="number" class="form-control" id="add-isbn" >-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-author" class="form-label text-primary">Tác giả</label>-->
<!--                <select name="author_id" class="form-select" aria-label="Default select example" id="add-author">-->
<!--                    <option selected>Chọn tác giả</option>-->
<!--                    <option value="1">One</option>-->
<!--                    <option value="2">Two</option>-->
<!--                    <option value="3">Three</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-category" class="form-label text-primary">Thể loại</label>-->
<!--                <select name="category_id" class="form-select" aria-label="Default select example" id="add-category">-->
<!--                    <option selected>Chọn thể loại</option>-->
<!--                    <option value="1">One</option>-->
<!--                    <option value="2">Two</option>-->
<!--                    <option value="3">Three</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-publisher" class="form-label text-primary">Nhà xuất bản</label>-->
<!--                <select name="publisher_id" class="form-select" aria-label="Default select example" id="add-publisher">-->
<!--                    <option selected>Chọn nhà xuất bản</option>-->
<!--                    <option value="1">One</option>-->
<!--                    <option value="2">Two</option>-->
<!--                    <option value="3">Three</option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-page-number" class="form-label text-primary">Số trang</label>-->
<!--                <input name="page_number" type="number" class="form-control" id="add-page-number">-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-quantity" class="form-label text-primary">Số lượng</label>-->
<!--                <input name="quantity" type="number" class="form-control" id="add-quantity">-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-price-sale" class="form-label text-primary">Giá bán</label>-->
<!--                <input name="price_sale" type="number" class="form-control" id="add-price-sale">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-date-update" class="form-label text-primary">Ngày thêm</label>-->
<!--                <input name="date_update" type="date" class="form-control" id="add-date-update">-->
<!--            </div>-->
<!--            <div class="mb-3 col-4">-->
<!--                <label for="add-date-publication" class="form-label text-primary">Ngày xuất bản</label>-->
<!--                <input name="date_of_publication" type="date" class="form-control" id="add-date-publication">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label for="formFile" class="form-label text-primary">Ảnh bìa</label>-->
<!--            <input name="image" class="form-control" type="file" id="formFile">-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label for="add-des" class="form-label text-primary">Giới thiệu sách</label>-->
<!--            <textarea name="description" class="form-control" id="add-des" rows="3"></textarea>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

