<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/nienluanCNTT/public/img/Coffee_Please__1_-removebg-preview.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <link rel="stylesheet" href="/nienluanCNTT/public/css/index.css" />
    <?php 
        if (isset($data["css"])) {
            echo "<link rel='stylesheet' href='/nienluanCNTT/public/css/". $data["css"] .".css' />";
        }
    ?>
    <title>Mua Bán Nhà Đất</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-3 logo">
                        <img src="/nienluanCNTT/public/img/logo.png" alt="" />
                    </div>
                    <div class="col-9">
                        <ul class="item-header">
                            <li class="list-item active">
                                <a class="list-item-a" href="/nienluanCNTT/Home">Trang Chủ</a>
                            </li>
                            <li class="list-item active">
                                <a class="list-item-a" href="/nienluanCNTT/Gioithieu">Giới Thiệu</a>
                            </li>
                            <li class="list-item active more">
                                <a class="list-item-a" href="/nienluanCNTT/Sanpham">Sản Phẩm</a>
                                <i class="fa fa-angle-down sp-down"></i>
                                <ul class="list-item-product">

                                    <?php
                                        if(isset($data['allloai'])){
                                            foreach($data['allloai'] as $loai){
                                                echo '
                                                <li class="item-product">
                                                <a class="dropdown-item" 
                                                href="/nienluanCNTT/home/showProByType/'.$loai['idLoai'].'">
                                                '.$loai['tenLoai'].'
                                                </a>
                                                </li>
                                                ';
                                            }
                                        }
                                        ?>

                                </ul>
                            </li>

                            <li class="list-item active">
                                <a class="list-item-a" href="/nienluanCNTT/Lienhe">Liên Hệ</a>
                            </li>
                            <?php 
                                    if(isset($_COOKIE['idAdmin']) or isset($_COOKIE['idUser'])){
                                        echo '
                                        
                                        <div class="group_user">
                                        <div class="dropdown dropleft">
                                            <div id="dropdownMenuButton" class="btn-submit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-regular fa-user"></i>
                                            </div>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/nienluanCNTT/user">Thông Tin</a>
                                                <button class="dropdown-item logout">Đăng Xuất</button>
                                            </div>
                                            </div>
                                            </div>
                                        
                                        ';
                                    } else{
                                        echo '
                                        
                                        <div class="group_user">
                                            <button class="submit-btn"><a href="/nienluanCNTT/dangnhap">Đăng Nhập</a></button>
                                            <button class="submit-btn"><a href="/nienluanCNTT/dangky">Đăng Ký</a></button>
                                        </div>
                                    
                                    ';
                                    
                                    } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="banner-gt">
            <div class="container">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-md-10">
                        <div class="d-flex flex-column justify-content-center align-items-center slider">
                            <div class="slider-content-gt">
                                <span class="text-slider"><?=$data["gioithieu"] ?> </span>
                                <ul class="ul-banner">
                                    <li style="list-style: none">
                                        <a class="item-banner-a" href="/home">Trang Chủ</a>
                                    </li>
                                    <li style="list-style: none"><span>/</span></li>
                                    <li class="item-banner" style="list-style: none">
                                        <?=$data["gioithieu"] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <body>
            <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>
        </body>
    </main>
    <footer>

        <div class="bg-footer">
            <div class="container">
                <div class="row py-5">
                    <div class="col-6 group-content-input">
                        <p class="title-hf">Đăng ký nhận thông tin từ Batdongsan.vn</p>
                        <span class="content-hf">
                            Chúng tôi sẽ gửi bạn những thông tin bất động sản mới nhất
                        </span>
                    </div>
                    <div class="col-6">
                        <div class="input-footer">
                            <input aria-label="Địa chỉ Email" type="email" class="form-control"
                                placeholder="Nhập địa chỉ email của bạn..." name="EMAIL" required=""
                                autocomplete="off" />
                            <button class="btn button-footer" type="submit" aria-label="Đăng ký" name="subscribe">
                                <i class="fas fa-paper-plane"></i> Đăng ký ngay
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="hr-footer" />
                <div class="row">
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">BẤT ĐỘNG SẢN HÀ NỘI</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">BẤT ĐỘNG SẢN TP.HCM</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">MUA BÁN BẤT ĐỘNG SẢN</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">CHO THUÊ BẤT ĐỘNG SẢN</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr-footer" />
                <div class="row py-4">
                    <div class="col-3">
                        <img class="logo-footer" src="/nienluanCNTT/public/img/logo.png" alt="" />
                        <div class="footer_group">
                            <p class="footer_box">
                                <i class="fa-sharp fa-solid fa-location-dot"></i> 319 C16 Lý
                                Thường Kiệt, Phường 15, Quận 11, Tp.HCM
                            </p>
                            <p class="footer_box">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+0945477411">0945477411</a>
                            </p>
                            <p class="footer_box">
                                <i class="fa-solid fa-envelope-open-text"></i>
                                <a href="mailto:vinhky26032002@gmail.com" target="_blank">vinhky26032002@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">BẤT ĐỘNG SẢN HÀ NỘI</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">BẤT ĐỘNG SẢN HÀ NỘI</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="list-item-footer">
                            <h4 class="title-item-footer">
                                <a href="">BẤT ĐỘNG SẢN HÀ NỘI</a>
                            </h4>
                            <ul class="ul-item-footer">
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Trang Chủ</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Giới thiệu</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Sản phẩm</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Tin tức</a>
                                </li>
                                <li class="li-item-footer">
                                    <a class="list-item-a" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr-footer" />
                <div class="row hihi py-4">
                    <div class="col-6 copy-footer">
                        &copy; Bản quyền thuộc về haodzvcl
                        <span>Sapo</span>
                    </div>
                    <div class="footer-right col-6">
                        <span>Kết nối với chúng tôi trên:</span>
                        <div class="footer-right-item">
                            <a class="fb-a" href="">
                                <i class="fa-brands fa-facebook-f fb-i"></i>
                            </a>
                            <a class="fb-a" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="fb-a">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="back-to-top">
        <a href="#" class="back-to-top-button">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/nienluanCNTT/public/js/index.js"></script>
<script>
$('.logout').click(function() {
    document.cookie = "idAdmin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.location.reload();

})
$(document).ready(function() {
    $(".hide-more-search").slideUp();
    $(".more-search").click(function() {
        $(".hide-more-search").slideToggle("slow");
    });
});
</script>
<?php 
        if (isset($data["js"])) {
            echo "<script src='js/". $data["js"] .".js'></script>";
            
        }
    ?>

</html>