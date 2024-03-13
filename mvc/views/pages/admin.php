<header class="header-admin">
    <a class="go-home" href="/nienluanCNTT/trangchu"><img
            src="/nienluanCNTT/public/img/Coffee_Please__1_-removebg-preview.png" alt=""></a>
    <div class="group-admin-right">
        <h1 class="text-center title-admin">Hello <?=$data['tenAdmin']?></h1>
        <button class="btn btn-primary logout">Đăng xuất</button>
    </div>
</header>
<main>


    <div class="row d-flex">
        <div class="col-3 d-flex flex-column list-left">
            <div id="navbar-admin" class="btn btn-primary">
                <i class="fa-solid fa-users"></i> Quản lý tài khoản<i class="fa-solid fa-sort-down btn-down"></i>
            </div>
            <div id="admin-dropdown" style="display: none;">
                <a href="/nienluanCNTT/admin/addadmin" id="navbar-admin" type="button" class="btn btn-primary">
                    <i class="fa-solid fa-user-plus"></i> Thêm admin
                </a>
            </div>
            <div id="admin-dropdown1" style="display: none;">
                <a href="/nienluanCNTT/admin/danhsachadmin" id="navbar-admin" type="button" class="btn btn-primary">
                    <i class="fa-solid fa-user-tie"></i> Danh sách admin
                </a>
            </div>
            <div id="admin-dropdown2" style="display: none;">
                <a href="/nienluanCNTT/admin/danhsachuser" id="navbar-admin" type="button" class="btn btn-primary">
                    <i class="fa-solid fa-circle-user"></i> Danh sách người dùng
                </a>
            </div>
            <a href="/nienluanCNTT/admin/sanpham" id="navbar-admin" type="button" class="btn btn-primary">
                <i class="fa-regular fa-newspaper"></i>
                quản lý bài viết</a>
            <a href="/nienluanCNTT/admin/themsp" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-plus"></i> Thêm bài viết</a>
            <a href="/nienluanCNTT/admin/hienthiloai" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-folder-open"></i> Quản lý loại</a>
            <a href="/nienluanCNTT/admin/themloai" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-pen-to-square"></i> Thêm loại</a>
            <a href="/nienluanCNTT/admin/hienthihinhthuc" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-folder-open"></i> Quản lý hình thức</a>
            <a href="/nienluanCNTT/admin/themHT" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-pen-to-square"></i> Thêm hình thức</a>
            <a href="/nienluanCNTT/admin/danhsachlichdat" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-regular fa-calendar"></i> Đặt lịch</a>

            <a href="/nienluanCNTT/admin/thongke" id="navbar-admin" type="button" class="btn btn-primary"><i
                    class="fa-solid fa-filter"></i> Thống kê</a>




        </div>
        <div class="col-9">
            <div class="content-admin">

                <?php
            if(isset($data['admin-child'])){
                require_once "./mvc/views/pages/".$data["admin-child"].".php";
            }
            ?>
            </div>
        </div>
    </div>



</main>
<script>
const navbarAdmin = document.getElementById("navbar-admin");
const adminDropdown = document.getElementById("admin-dropdown");
const adminDropdown1 = document.getElementById("admin-dropdown1");
const adminDropdown2 = document.getElementById("admin-dropdown2");
const card1Icon = document.querySelector(".btn-down");

navbarAdmin.addEventListener("click", function() {
    const display = adminDropdown.style.display;
    if (display === "none") {
        adminDropdown.style.display = "block";
        adminDropdown1.style.display = "block";
        adminDropdown2.style.display = "block";

    } else {
        adminDropdown.style.display = "none";
        adminDropdown1.style.display = "none";
        adminDropdown2.style.display = "none";
    }
});
</script>