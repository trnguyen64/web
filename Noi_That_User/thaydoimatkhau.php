<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="styleweb.css">
    <title>TMC INTERIOR</title>
    <style>

    </style>
</head>
<body>
    <?php include './mainweb.php'; ?>

    <header class="navbar navbar-expand-lg bg-body-tertiary" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="Logo" width="120" height="80" class="d-inline-block align-text-top">
            </a>
            
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="trangchu.php">TRANG CHỦ</a></li>
                <li class="nav-item"><a class="nav-link" href="sanpham.php">SẢN PHẨM</a></li>
                <li class="nav-item"><a class="nav-link" href="gioithieu.php">GIỚI THIỆU</a></li>
                <li class="nav-item"><a class="nav-link" href="lienhe.php">LIÊN HỆ</a></li>
            </ul>

            <ul class="nav justify-content-end">
                <li><a class="fa-solid fa-magnifying-glass" href="#"></a></li>
                <li><a class="fa-solid fa-cart-shopping" href="giohang.php"></a></li>
                <li><a class="fa-regular fa-user" href="thongtintaikhoan.php"></a></li>
            </ul>
        </div>
    </header>
        <div class="container">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><h5>Ngô Văn Bá</h5></a>
                <a href="#" class="list-group-item list-group-item-action">Thông tin tài khoản</a>
                <a href="#" class="list-group-item list-group-item-action">Thay đổi mật khẩu</a>
                <a href="#" class="list-group-item list-group-item-action">Đơn hàng</a>
                <a href="#" class="list-group-item list-group-item-action">Thoát</a>
            </div>
            <div class=container>
            <ul class="nav nav-pills">
            <li class="nav-item">
                <h2>Đổi mật khẩu</h2>
                <form action="/change-password" method="post">
                    <label for="old-password">Mật khẩu cũ</label>
                        <input type="password" name="old-password" id="old-password"><br>
                        <label for="new-password">Mật khẩu</label><br>
                        <input type="password" name="new-password" id="new-password"><br>
                        <label for="confirm-password">Nhập lại mật khẩu</label><br>
                        <input type="password" name="confirm-password" id="confirm-password"><br>
                        <input type="submit" value="Lưu">
                </form>
            </li>
            </ul>
            </div>
        </div>
    <?php include './mainweb.php'; ?>
    <footer>
        <div class="container-fluid">
            <div class="list">
            <ul class="nav justify-content-lg-center">
                <ul class="nav flex-column">
                    <li class="nav-item"><h5>SẢN PHẨM</h5></li>
                    <li class="nav-item"><a href="#">Khóa thông minh</a></li>
                    <li class="nav-item"><a href="#">Bàn làm việc</a></li>
                    <li class="nav-item"><a href="#">Giường ngủ</a></li>
                    <li class="nav-item"><a href="#">Tủ quần áo</a></li>
                    <li class="nav-item"><a href="#">Sofa</a></li>
                </ul>

                <ul class="nav flex-column">
                    <li class="nav-item"><h5>TRỢ GIÚP</h5></li>
                    <li class="nav-item"><a href="#">Hướng dẫn mua hàng</a></li>
                    <li class="nav-item"><a href="#">Hướng dẫn thanh toán</a></li>
                    <li class="nav-item"><a href="#">Hướng dẫn đổi trả</a></li>
                    <li class="nav-item"><a href="#">Chính sách giao hàng</a></li>
                </ul>

                <ul class="nav flex-column">
                    <li><h5>VỀ CHÚNG TÔI</h5></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tin tức</a></li>
                </ul>

                <ul class="nav flex-column">
                    <li class="nav-item"><h5>FANPAGE</h5></li>
                    <li class="nav-item"><img src="./img/fanpage.png" width="100%"></li>
                </ul>

                <ul class="nav flex-column">
                    <li class="nav-item"><h5>THEO DÕI CHÚNG TÔI</h5></li>
                    <li class="nav-item"><img src="./img/follow.png" width="100%"></li>
                </ul>
            </ul>
        </div><br>
        <hr>
        <center><h6 style="color: #FFF;">@Copy right 2023, Designed by Lanweb</h6></center>
    </div>
        </div>
    </footer>
</body>
</html>
