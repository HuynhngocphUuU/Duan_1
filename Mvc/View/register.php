
        <section class="banner">
            <div class="banner-content">
                <img src="./Public/img/bg_breadcrumb.jpg" alt="">
            </div>
        </section>

        <section class="content">
            <div class="gt-link">
                <p>Trang Chủ/ <a href="">Đăng Ký</a></p>
           </div><br>
            <h2>ĐĂNG KÝ</h2>
            <form action="login_process.php" method="POST" class="login-form">
                <div class="input-group">
                    <label for="email">E-mail*</label>
                    <input type="email " id="email" name="email" placeholder="Nhập email" required>
                </div>
                <div class="input-group">
                    <label for="username">Họ va Tên*</label>    
                    <input type="text" id="username" name="username" placeholder="Nhập họ va tên " required>
                </div>
                <div class="input-group">
                    <label for="password"> Mật Khẩu*</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
            <div class="signup-link">
                <p>Đã có tài khoản? <a href="../index.php/">Đăng Nhập</a></p>
            </div>
        </section>
