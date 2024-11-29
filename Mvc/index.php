<?php
include_once 'View/headder.php';

$page = isset($_GET['trang']) ? $_GET['trang'] : 'home'; // Mặc định là "home"

switch ($page) {
    case 'home':
        include_once 'View/home.php'; // Hiển thị trang chủ
        break;
    case 'login':
        include_once 'View/login.php'; // Hiển thị trang đăng nhập
        break;
    case 'register':
        include_once 'View/register.php'; // Hiển thị trang đăng ký
        break;
        case 'product':
            include_once 'View/product.php'; // Hiển thị trang đăng ký
            break;
    default:
        echo "<h1>Trang bạn yêu cầu không tồn tại!</h1>";
        echo "<a href='?trang=home'>Quay lại trang chủ</a>";
        break;
}

include_once 'View/footer.php';
?>
