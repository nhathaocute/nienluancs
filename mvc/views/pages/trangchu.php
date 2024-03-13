<main>
    <div class="banner">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-10">
                    <div class="d-flex flex-column justify-content-center align-items-center slider">
                        <div class="slider-content">
                            <span class="text-slider">
                                CÁCH TIẾP CẬN BẤT ĐỘNG SẢN NHANH NHẤT
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-search p-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="body-search">
                        <div class="search-list d-flex align-items-center justify-content-center">
                            <span class="active"> Nhà Đất Bán </span>

                        </div>
                        <form method="get" action="/nienluanCNTT/Home/search">
                            <div class="group-search p-4">
                                <div class="row">
                                    <div class="col-4">
                                        <select name="idLoai" class="form-control form-control-lg w-100 select-search">

                                            <?php
                                        if(isset($data['allloai'])){
                                            foreach($data['allloai'] as $loai){
                                                echo '
                                                <option value="'.$loai['idLoai'].'">'.$loai['tenLoai'].'</option>
                                                ';
                                            }
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <input name="tenSP" class="w-100 form-control h-100 ip-search" type="search"
                                            placeholder="Nhập địa điểm hoặc từ khóa (Ví dụ: Vinhomes)..." />
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex h-100">
                                            <div class="button-search">
                                                <button type="submit" class="btn btn-primary px-5 h-100 btn-search">
                                                    Tìm Kiếm
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                            <div class="more-search">
                                                <img src="/nienluanCNTT/public/img/option.webp" alt="" />
                                                Thêm
                                                <i class="fa-solid fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hide-more-search">
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <select name="tinh" class="form-control form-control-lg w-100">
                                                <option value="">-- Chọn tỉnh/thành phố --</option>
                                                <option value="An Giang">An Giang</option>
                                                <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                                                <option value="Bắc Giang">Bắc Giang</option>
                                                <option value="Bắc Kạn">Bắc Kạn</option>
                                                <option value="Bạc Liêu">Bạc Liêu</option>
                                                <option value="Bắc Ninh">Bắc Ninh</option>
                                                <option value="Bến Tre">Bến Tre</option>
                                                <option value="Bình Định">Bình Định</option>
                                                <option value="Bình Dương">Bình Dương</option>
                                                <option value="Bình Phước">Bình Phước</option>
                                                <option value="Bình Thuận">Bình Thuận</option>
                                                <option value="Cà Mau">Cà Mau</option>
                                                <option value="Cần Thơ">Cần Thơ</option>
                                                <option value="Cao Bằng">Cao Bằng</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Đắk Lắk">Đắk Lắk</option>
                                                <option value="Đắk Nông">Đắk Nông</option>
                                                <option value="Điện Biên">Điện Biên</option>
                                                <option value="Đồng Nai">Đồng Nai</option>
                                                <option value="Đồng Tháp">Đồng Tháp</option>
                                                <option value="Gia Lai">Gia Lai</option>
                                                <option value="Hà Giang">Hà Giang</option>
                                                <option value="Hà Nam">Hà Nam</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                <option value="Hải Dương">Hải Dương</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Hậu Giang">Hậu Giang</option>
                                                <option value="Hòa Bình">Hòa Bình</option>
                                                <option value="Hưng Yên">Hưng Yên</option>
                                                <option value="Khánh Hòa">Khánh Hòa</option>
                                                <option value="Kiên Giang">Kiên Giang</option>
                                                <option value="Kon Tum">Kon Tum</option>
                                                <option value="Lai Châu">Lai Châu</option>
                                                <option value="Lâm Đồng">Lâm Đồng</option>
                                                <option value="Lạng Sơn">Lạng Sơn</option>
                                                <option value="Long An">Long An</option>
                                                <option value="Nam Định">Nam Định</option>
                                                <option value="Nghệ An">Nghệ An</option>
                                                <option value="Ninh Bình">Ninh Bình</option>
                                                <option value="Ninh Thuận">Ninh Thuận</option>
                                                <option value="Phú Thọ">Phú Thọ</option>
                                                <option value="Quảng Bình">Quảng Bình</option>
                                                <option value="Quảng Nam">Quảng Nam</option>
                                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                <option value="Quảng Ninh">Quảng Ninh</option>
                                                <option value="Quảng Trị">Quảng Trị</option>
                                                <option value="Sóc Trăng">Sóc Trăng</option>
                                                <option value="Sơn La">Sơn La</option>
                                                <option value="Tây Ninh">Tây Ninh</option>
                                                <option value="Thái Bình">Thái Bình</option>
                                                <option value="Thái Nguyên">Thái Nguyên</option>
                                                <option value="Thanh Hóa">Thanh Hóa</option>
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                <option value="Tiền Giang">Tiền Giang</option>
                                                <option value="Trà Vinh">Trà Vinh</option>
                                                <option value="Tuyên Quang">Tuyên Quang</option>
                                                <option value="Vĩnh Long">Vĩnh Long</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Yên Bái">Yên Bái</option>
                                                <option value="Phú Yên">Phú Yên</option>
                                                <option value="Cần Thơ">Cần Thơ</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Hải Phòng">Hải Phòng</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="TP HCM">TP HCM</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="dienTich" class="form-control form-control-lg w-100">
                                                <option value="" default>Diện tích</option>
                                                <option value="0-20">Dưới 20m2</option>
                                                <option value="20-50">20 - 50m2</option>
                                                <option value="50-0">Trên 50m2</option>
                                                <option value="100-0">Trên 100m2</option>
                                                <option value="200-0">Trên 200m2</option>
                                                <option value="300-0">Trên 300m2</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="gia" class="form-control form-control-lg w-100">
                                                <option value="" default>Giá</option>
                                                <option value="0-10000000">Dưới 10.000.000đ</option>
                                                <option value="10000000-50000000">Từ 10.000.000đ -
                                                    50.000.000đ</option>
                                                <option value="50000000-100000000">Từ 50.000.000đ -
                                                    100.000.000đ</option>
                                                <option value="100000000-500000000">Từ 100.000.000đ -
                                                    500.000.000đ</option>
                                                <option value="500000000-1000000000">Từ 500.000.000đ -
                                                    1.000.000.000đ</option>
                                                <option value="1000000000-10000000000">Từ 1.000.000.000đ -
                                                    10.000.000.000đ</option>
                                                <option value="10000000000-0">Trên 10.000.000.000đ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="footer-group-search">
                            <div class="footer-box-search">
                                <div class="box-searcg-img">
                                    <img src="/nienluanCNTT/public/img/search1.webp" alt="" />
                                </div>
                                <span>Căn hộ</span>
                            </div>
                            <div class="footer-box-search">
                                <div class="box-searcg-img">
                                    <img src="/nienluanCNTT/public/img/search2.webp" alt="" />
                                </div>
                                <span>Biệt thự</span>
                            </div>
                            <div class="footer-box-search">
                                <div class="box-searcg-img">
                                    <img src="/nienluanCNTT/public/img/search3.webp" alt="" />
                                </div>
                                <span>Chung cư</span>
                            </div>
                            <div class="footer-box-search">
                                <div class="box-searcg-img">
                                    <img src="/nienluanCNTT/public/img/search4.webp" alt="" />
                                </div>
                                <span>Nhà phố</span>
                            </div>
                            <div class="footer-box-search">
                                <div class="box-searcg-img">
                                    <img src="/nienluanCNTT/public/img/search5.webp" alt="" />
                                </div>
                                <span>Văn phòng</span>
                            </div>
                            <div class="footer-box-search">
                                <div class="box-searcg-img box-last-child">
                                    <img src="/nienluanCNTT/public/img/search6.webp" alt="" />
                                </div>
                                <span>Cửa hàng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        if(!empty($data['getAllHT'])){
            
            foreach($data['getAllHT'] as $sanpham){
                echo '
                <div class="nhadatban">
            <div class="header-trand d-flex align-items-center justify-content-center">
                <div class="for-sale d-flex align-items-center justify-content-center flex-column">
                    <h3>
                        Bất động sản
                        <span class="for-sale-span">'.$sanpham['tenHT'].'</span>
                    </h3>

                    <img title="Bất động sản '.$sanpham['tenHT'].'" data-toggle="tooltip" src="/nienluanCNTT/public/img/icon-sale.webp" alt="" />
                </div>
            </div>
            <div class="carousel-lr">
                <div class="group-slide">
                    <div class="row">
                ';
                if(!empty($data['getHT'])) {
                    foreach($data['getHT'][$sanpham['idHT']] as $getHT) {
                        echo '
                        <div class="col-4 py-4">
                            <div class="sale-item">
                                <div class="group-img">
                        ';
                        if(!empty($getHT['listimage'])) {
                            echo '
                            <img src="'.$getHT['listimage'][0]['tenHinh'].'" alt="" />
                            ';
                        }
                        echo'
                                    
        
                                    <span class="thue-ban item-img">'.$getHT['tenHT'].'</span>
                                    <span class="hot item-img">hot</span>
                                </div>
                                <div class="info-price-product">
                                    <div>
                                        <h3 class="product-name">'.$getHT['tenSP'].'</h3>
                                        <ul class="product-list pl-4">
                                            <li class="itemli1">
                                                <span>'.$getHT['diaChi'].'</span>
                                            </li>
                                            <li class="itemli2">
                                                <span class="span-itemli">Phòng ngủ: </span>'.$getHT['pNgu'].'
                                            </li>
                                            <li class="itemli3">
                                                <span class="span-itemli">Phòng tắm: </span>'.$getHT['pTam'].'
                                            </li>
                                            <li class="itemli4">
                                                <span class="span-itemli">Diện tích: </span> '.$getHT['dienTich'].'m2
                                            </li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div class="price-sale">
                                        <div class="price-left">'.number_format($getHT['gia'] / 1000000, 2, ',', '.').' triệu đồng</div>
                                        <a href="/nienluanCNTT/sanpham/chitietsp/'.$getHT['idSP'].'" class="buy">Mua theo lô <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ';
                    }
                }
            } 
        }
        ?>
    </div>
    </div>

    <div class="more d-flex justify-content-end align-items-center">
        <i class="fa-regular fa-hand-point-right"></i>
        <a href="/nienluanCNTT/Sanpham" class="click-me pl-2">xem thêm</a>
    </div>

    <div class="cactp1">

        <div class="container">
            <div class="for-sale d-flex align-items-center justify-content-center flex-column">
                <h3>
                    Bất động sản
                    <span class="for-sale-span">cho bán</span>
                </h3>

                <img title="Bất động sản cho bán" data-toggle="tooltip" src="/nienluanCNTT/public/img/icon-sale.webp"
                    alt="" />
            </div>
            <div class="py-5 row position-relative">
                <div class="my-5 bannha-btn__prev position-absolute">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="my-5 bannha-btn__next position-absolute">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="w-100 sl-bao position-relative">
                    <?php
                if(!empty($data['randomProduct'])){
                    foreach($data['randomProduct'] as $product){
                        echo '
                        <div class="carousel-cell w-100">
                        <div class="d-flex w-100 sl-test hihi-haha">
                            <div id="carouselExampleIndicators" class="carousel slide col-6 slide-to-slide"
                                data-ride="carousel" data-interval="3000" data-pause="hover">
                                <span class="thue-ban item-img-slide"> '.$product['tenHT'].' </span>
                                <span class="hot item-img-slide">hot</span>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">';
                        foreach ( $product['listimage'] as $key => $img) { 
                            if($key == 0) {
                                echo '<div class="carousel-item active">';
                            }else {
                                echo '<div class="carousel-item">';
                            }
                            echo '
                            
                                <div class="group-img-slide">
                                    <img src="'.$img.'" alt="" />
                                </div>
                            </div>
                            ';
                        }
                        echo '
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <div class="info-price-product-slide">
                                    <div>
                                        <h3 class="product-name">'.$product['tenSP'].'</h3>
                                        <p class="product-content">
                                        '.$product['moTa'].'
                                        </p>

                                        <ul class="product-list pl-4">
                                            <li class="itemli1">
                                                <span>'.$product['diaChi'].'</span>
                                            </li>
                                            <li class="itemli2">
                                                <span class="span-itemli">Phòng ngủ: </span>'.$product['pNgu'].'
                                            </li>
                                            <li class="itemli3">
                                                <span class="span-itemli">Phòng tắm: </span>'.$product['pTam'].'
                                            </li>
                                            <li class="itemli4">
                                                <span class="span-itemli">Diện tích: </span>'.$product['dienTich'].'
                                            </li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div class="price-sale">
                                        <div class="price-left">'.number_format($product['gia'] / 1000000, 2, ',', '.').' triệu đồng</div>
                                        <a href="/nienluanCNTT/sanpham/chitietsp/'.$product['idSP'].'" class="buy">Mua theo lô <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';}}
            ?>

                </div>
            </div>


            <div class="thanhpho">
                <div class="for-sale d-flex align-items-center justify-content-center flex-column">
                    <h3>
                        Các dự án
                        <span class="for-sale-span">đã triển khai tại một số thành phố</span>
                    </h3>

                    <img title="Bất động sản cho bán" data-toggle="tooltip"
                        src="/nienluanCNTT/public/img/icon-sale.webp" alt="" />
                </div>
                <div class="row pt-4">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-5">
                                <div class="group-location">
                                    <img src="/nienluanCNTT/public/img/hanoi.webp" alt=""
                                        onclick="goToLocation('Hà Nội')" />
                                    <div class="box-location">
                                        <p class="child-location1">HÀ NỘI</p>
                                    </div>
                                    <div class="box-quantity">
                                        <span class="number">17</span>
                                        <span class="hot location">Dự án</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="group-location">
                                    <img src="/nienluanCNTT/public/img/danang.webp" alt=""
                                        onclick="goToLocation('Đà Nẵng')" />
                                    <div class="box-location">
                                        <p class="child-location1">ĐÀ NẴNG</p>
                                    </div>
                                    <div class="box-quantity">
                                        <span class="number">17</span>
                                        <span class="hot location">Dự án</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="group-location">
                                    <img src="/nienluanCNTT/public/img/nghean.webp" alt=""
                                        onclick="goToLocation('Nghệ An')" />
                                    <div class="box-location">
                                        <p class="child-location1">NGHỆ AN</p>
                                    </div>
                                    <div class="box-quantity">
                                        <span class="number">17</span>
                                        <span class="hot location">Dự án</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="group-location">
                                    <img src="/nienluanCNTT/public/img/haiphong.webp" alt=""
                                        onclick="goToLocation('Hải Phòng')" />
                                    <div class="box-location">
                                        <p class="child-location1">HẢI PHÒNG</p>
                                    </div>
                                    <div class="box-quantity">
                                        <span class="number">17</span>
                                        <span class="hot location">Dự án</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="group-location">
                            <img src="/nienluanCNTT/public/img/tphcm.webp" alt="" onclick="goToLocation('TP.HCM')" />
                            <div class="box-location">
                                <p class="child-location1">TP.HỒ CHÍ MINH</p>
                            </div>
                            <div class="box-quantity">
                                <span class="number">17</span>
                                <span class="hot location">Dự án</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="introduce">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="group-title-introduce d-flex flex-column">
                        <h3 class="title-introduce">
                            Sứ mệnh của chúng tôi là giúp mọi người
                            <p>tìm & tạo nên 1 không gian sống tốt hơn!</p>
                        </h3>
                    </div>
                    <div class="content-introduce">
                        <p>
                            Thành lập Công ty TNHH Dịch vụ và Xây dựng batdongsan.vn với
                            vốn điều lệ ban đầu là 0,8 tỷ đồng và 10 nhân viên. Khi mới
                            hoạt động, batdongsan.vn chuyên về môi giới các dự án bất động
                            sản. Hiện tại, đã tăng vốn điều lệ lên 3.500 tỷ đồng với trên
                            3500 nhân viên.
                        </p>
                        <p>
                            Trải qua chặng đường 17 năm phát triển, Tập đoàn batdongsan.vn
                            đã trở thành một trong những chủ đầu tư mang lại dấu ấn với
                            sản phẩm đa dạng đáp ứng nhu cầu của thị trường.
                        </p>
                        <p>
                            Tầm nhìn đến 2025: "Trở thành 1 trong 10 Tập đoàn kinh tế tư
                            nhân lớn nhất Việt Nam" Tầm nhìn đến 2030: "Trở thành 1 trong
                            10 công ty phát triển Bất động sản tốt nhất Đông Nam Á"
                        </p>
                    </div>
                    <div class="contact-introduce">
                        <button type="button" class="btn btn-primary btn-search">
                            <img src="/nienluanCNTT/public/img/phone.webp" alt="" />
                            Liên hệ tư vấn
                        </button>
                    </div>
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-5 px-0">
                            <div class="item-introduce item-intro1">
                                <img src="/nienluanCNTT/public/img/search.webp" alt="" />
                                <p>Tìm kiếm thông tin dễ dàng</p>
                                <span>
                                    Không ngừng phát triển mạnh mẽ các hoạt động đầu tư xây
                                    dựng để nhanh chóng trở thành một trong những tập đoàn
                                    phát triển bất động sản hàng đầu
                                </span>
                            </div>
                        </div>
                        <div class="col-7 px-0">
                            <div class="item-introduce">
                                <img src="/nienluanCNTT/public/img/time.webp" alt="" />
                                <p>Tiết kiệm thời gian và chi phí</p>
                                <span>
                                    Tất cả các giải pháp mà batdongsan.vn cung cấp đều được
                                    phân tích một cách chuyên sâu, hướng đến phục vụ và giải
                                    quyết những vướng mắc một cách nhanh chóng nhu cầu của
                                    khách hàng.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 px-0">
                            <div class="item-introduce">
                                <img src="/nienluanCNTT/public/img/gift.webp" alt="" />
                                <p>Đảm bảo quyền lợi khách hàng</p>
                                <span>
                                    Trải qua chặng đường 17 năm phát triển, batdongsan.vn đã
                                    trở thành một trong những chủ đầu tư mang lại dấu ấn với
                                    sản phẩm đa dạng đáp ứng nhu cầu của thị trường
                                </span>
                            </div>
                        </div>
                        <div class="col-5 px-0">
                            <div class="item-introduce item-intro4">
                                <img src="/nienluanCNTT/public/img/vali.webp" alt="" />
                                <p>Kết nối với nhà đầu tư</p>
                                <span>
                                    Là thương hiệu hàng đầu trên thị trường batdongsan.vn luôn
                                    được các đối tác đánh giá cao về năng lực và uy tín kinh
                                    doanh. Đã trở thành đối tác tin cậy của hàng loạt công ty.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="for-sale d-flex align-items-center justify-content-center flex-column">
            <h3>
                Doanh nghiệp
                <span class="for-sale-span">nổi bật</span>
            </h3>

            <img title="Bất động sản cho bán" data-toggle="tooltip" src="/nienluanCNTT/public/img/icon-sale.webp"
                alt="" />
        </div>

        <div class="row py-5 position-relative">
            <div class="my-5 home-btn__prev position-absolute">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <div class="my-5 home-btn__next position-absolute">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="w-100 slider-footer">
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer1.webp" alt="" />
                </div>
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer2.webp" alt="" />
                </div>
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer3.webp" alt="" />
                </div>
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer1.webp" alt="" />
                </div>
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer2.webp" alt="" />
                </div>
                <div class="carousel-cell img-slide-footer">
                    <img src="/nienluanCNTT/public/img/slide-footer3.webp" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="w-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89514.26054840433!2d105.57074133181563!3d9.758613217959255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0f1d1e88956ef%3A0xef7a6de6658fee0c!2zxJDhuqFpIEjhu41jIEPhuqduIFRoxqEgS2h1IEjDsmEgQW4!5e0!3m2!1svi!2s!4v1678755912728!5m2!1svi!2s"
            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>