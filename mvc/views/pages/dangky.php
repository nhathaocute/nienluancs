<main>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <a href="/nienluanCNTT/dangnhap" class="inactive underlineHover sign">Đăng Nhập</a>
            <h2 class="active">Đăng Ký</h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <a href="trangchu">

                    <img class="img-login" src="/nienluanCNTT/public/img/Coffee_Please__1_-removebg-preview.png"
                        alt="User Icon" />
                </a>
            </div>

            <!-- Login Form -->
            <form id="signup-form" method="post">
                <input type="text" id="login" class="fadeIn second" name="tenUser" required
                    placeholder="tên tài khoản" />
                <input type="text" id="login" class="fadeIn second" pattern="[0-9]{10}" required name="SDT"
                    placeholder="Số Điện Thoại" />
                <input type="email" id="login" class="fadeIn second" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    required name="email" placeholder="email" />
                <input type="password" id="password" class="fadeIn third" name="matKhau" placeholder="mật khẩu" />

                <input type="password" id="password1" class="fadeIn third" name="matKhau2"
                    placeholder="nhập lại mật khẩu" />
                <input type="submit" class="fadeIn fourth" id="signup-btn" value="Đăng Ký" />
            </form>


        </div>
    </div>
</main>