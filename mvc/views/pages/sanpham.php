<div class="w-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9516470.959656218!2d104.5616872313439!3d16.255902886053196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1678764714195!5m2!1svi!2s"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<div class="container">
    <div class="carousel-lr">
        <div class="group-slide">
            <div class="row">
                <?php
                if(!empty($data['allsanpham'])){
                    
                    foreach($data['allsanpham'] as $product){
                        echo ' <div class="col-4 py-4">
                        <div class="sale-item">
                            <div class="group-img">
                            ';
                        if(!empty($product['listimage'])) {
                            echo '
                            <img src="'.$product['listimage'][0]['tenHinh'].'" alt="" />
                            ';
                        }
                        echo'
                                
    
                                <span class="thue-ban item-img"> '.$product['tenHT'].' </span>
                                <span class="hot item-img">hot</span>
                            </div>
                            <div class="info-price-product">
                                <div>
                                    <h3 class="product-name">'.$product['tenSP'].'</h3>
                                    <ul class="product-list pl-4">
                                        <li class="itemli1">
                                            <span> '.$product['diaChi'].' </span>
                                        </li>
                                        <li class="itemli2">
                                            <span class="span-itemli">Phòng ngủ: </span>'.$product['pNgu'].'
                                        </li>
                                        <li class="itemli3">
                                            <span class="span-itemli">Phòng tắm: </span>'.$product['pTam'].'
                                        </li>
                                        <li class="itemli4">
                                            <span class="span-itemli">Diện tích: </span>'.$product['dienTich'].'m2
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
                    </div>';
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>