<header class="header-admin">
    <a class="go-home" href="/nienluanCNTT/trangchu"><img
            src="/nienluanCNTT/public/img/Coffee_Please__1_-removebg-preview.png" alt=""></a>
    <div class="group-admin-right">
        <h1 class="text-center title-admin">Hello <?=$data['tenUser']?></h1>
        <button class="btn btn-primary logout">Đăng xuất</button>
    </div>
</header>
<main>


    <div class="row d-flex">
        <div class="col-3 d-flex flex-column list-left">



            <a href="/nienluanCNTT/user/thongtinnguoidung" id="navbar-admin" type="button" class="btn btn-primary">
                <i class="fa-solid fa-user-plus"></i> Thông tin tài Khoản
            </a>

            <a href="/nienluanCNTT/user/updateuser/<?=$_COOKIE['idUser']?>" id="navbar-admin" type="button"
                class="btn btn-primary">
                <i class="fa-solid fa-user-plus"></i> Thay đổi thông tin
            </a>

            <a href="/nienluanCNTT/user/lichdadat/<?=$_COOKIE['idUser']?>" id="navbar-admin" type="button"
                class="btn btn-primary">
                <i class="fa-solid fa-user-tie"></i> Lịch đặt đã xác nhận
            </a>

            <a href="/nienluanCNTT/user/lichchuadat/<?=$_COOKIE['idUser']?>" id="navbar-admin" type="button"
                class="btn btn-primary">
                <i class="fa-solid fa-circle-user"></i> Lịch đặt chưa xác nhận
            </a>

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