<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Thêm tài khoản admin
    </h1>
    <form id="signup-form" method="post">
        <input type="text" id="login" class="fadeIn second" name="tenAdmin" required placeholder="tên tài khoản" />
        <input type="text" id="login" class="fadeIn second" pattern="[0-9]{10}" required name="SDT"
            placeholder="Số Điện Thoại" />
        <input type="email" id="login" class="fadeIn second" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required
            name="email" placeholder="email" />
        <input type="password" id="password" class="fadeIn third" name="matKhau" placeholder="mật khẩu" />

        <input type="password" id="password1" class="fadeIn third" name="matKhau2" placeholder="nhập lại mật khẩu" />
        <input type="submit" class="fadeIn fourth" id="signup-btn" value="Thêm" />
    </form>
</div>