<div class="menu sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Quản lý sách
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.php?page=books-table" class="dropdown-item">Danh mục sách</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=add-book" class="dropdown-item">Thêm sách mới</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=publishers" class="dropdown-item">Nhà xuất bản</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php?page=categories">Thể loại</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Tác giả
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.php?page=authors" class="dropdown-item">Danh sách</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=add-author" class="dropdown-item">Thêm tác giả</a></li>
<!--                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=authors">Tác giả</a></li>-->
<!--                            <li><a class="list-group-item list-group-item-action list-group-item-info" href="index.php?page=categories">Thể loại</a></li>-->
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Quản lý hóa đơn
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.php?page=purchase" class="dropdown-item"">Phiếu nhập</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=orders-list" class="dropdown-item"">Hóa đơn</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=customers" class="dropdown-item"">Khách hàng</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=employees" class="dropdown-item"">Nhân viên</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?page=suppliers" class="dropdown-item"">Nhà cung cấp</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" action="index.php" method="post">
                    <input class="form-control me-2" type="search" placeholder="Tên sách hoặc tên Tác giả" aria-label="Search" name="search_name">
                    <button class="btn btn-outline-success text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>