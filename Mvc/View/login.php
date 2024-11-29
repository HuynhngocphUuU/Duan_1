     <?php 
        session_start();
        ob_start();

        include "model/connectdb.php";
        include "model/user.php";

        if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $role=checkuser($user,$pass);
            echo($role);
            $_SESSION["role"]=$role;
            if ($role==1) header('location: view/admin.php');
            else header('location: index.php');
        }
     ?>
        <section class="banner">
            <div class="banner-content">
                <img src="./Public/img/bg_breadcrumb.jpg" alt="">
            </div>
        </section>
    
        <section class="content">
            <div class="gt-link">
                 <p>Trang Chủ/ <a href="">Đăng Nhập</a></p>
            </div><br>
            <h2>Đăng Nhập</h2>
            <form action="" method="POST" class="login-form">
                <div class="input-group">
                    <label for="email">Tên*</label>
                    <input type="text" id="" name="user"  placeholder="Nhập Tên" required>
                </div>
                <div class="input-group">
                    <label for="password"> Mật Khẩu*</label>
                    <input type="text" id="" name="pass" placeholder="Nhập mật khẩu" required>
                </div>
                <input value="Đăng nhập" class="btn" type="submit" id="" name="dangnhap">
                <!-- <a href="../index.php"></a><button type="submit" class="btn">Đăng nhập</button> -->
            </form>
            <div class="signup-link">
            <p>Chưa có tài khoản? <a href="index.php?trang=register">Đăng ký</a></p>


            </div>
        </section>
  
