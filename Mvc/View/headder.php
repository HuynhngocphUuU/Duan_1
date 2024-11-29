<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="Public/css/product.css">
    <link rel="stylesheet" href="Public/css/login.css">
    <link rel="stylesheet" href="Public/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5a06f65a96.js" crossorigin="anonymous"></script>
    <title>Trang web bán hàng Lorava</title>
    <meta name="description" content="Lorava - Website bán hàng chuyên cung cấp sản phẩm chất lượng, giá cả hợp lý.">
</head>
<body>
<header>
    <div class="welcome">
        <p>Welcome to Lorava!</p>
    </div>
    <div class="main">
        <div class="menu">
            <input type="checkbox" id="menu-toggle" hidden>
            <label for="menu-toggle" class="tab_menu">
                <i class="fa-solid fa-bars"></i>
            </label>
            <div class="tab_menu_1">
                <p>Menu</p>
            </div>
            <div class="sub-menu-wrap">
                <div class="sub-menu">
                    <div class="logo">
                        <img src="Public/img/logo (2).png" alt="Lorava Logo">
                    </div>
                    <div class="login-logout">
                        <a href="?trang=login">Đăng nhập</a> |
                        <a href="?trang=register">Đăng ký</a>
                    </div>
                    <a href="?trang=home" class="sub-menu-link"><p>Trang chủ</p></a>
                    <hr>
                    <a href="?trang=about" class="sub-menu-link"><p>Giới thiệu</p></a>
                    <hr>
                    <a href="?trang=product" class="sub-menu-link"><p>Sản phẩm</p></a>
                    <hr>
                    <a href="?trang=news" class="sub-menu-link"><p>Tin tức</p></a>
                    <hr>
                    <a href="?trang=store" class="sub-menu-link"><p>Hệ thống cửa hàng</p></a>
                    <hr>
                    <a href="?trang=contact" class="sub-menu-link"><p>Liên hệ</p></a>
                    <hr>
                </div>
            </div>
        </div>
        <div class="logo">
            <a href="?trang=home"><img src="Public/img/logo (2).png" alt="Lorava Logo"></a>
        </div>
        <div class="icon">
            <input type="checkbox" id="check">
            <div class="search-box">
                <input type="search" placeholder="Tìm kiếm...">
                <label for="check" class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
            <div class="cart-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </div>
    </div>
</header>
</body>
</html>
