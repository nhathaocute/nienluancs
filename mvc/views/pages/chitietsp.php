<div class="py-5 position-relative">
    <div class="ctsp-btn__prev position-absolute">
        <i class="fa-solid fa-angle-left"></i>
    </div>
    <div class="ctsp-btn__next position-absolute">
        <i class="fa-solid fa-angle-right"></i>
    </div>
    <div class="carousel-ctsp py-5">
        <?php
                if(!empty($data['getimgbypro'])){
                    if(count($data['getimgbypro'])==1){
                        echo '<div class="carousel-cell1">
                            <img class="img-product-li" src="'.$data['getimgbypro'][0]['tenHinh'].'" alt="" />
                        </div>
                        ';
                    } else if(count($data['getimgbypro'])==2){
                    foreach($data['getimgbypro'] as $imgbypro){

                        echo '<div class="carousel-cell2">
                            <img class="img-product-li" src="'.$imgbypro['tenHinh'].'" alt="" />
                        </div>
                        ';
                        }
                    } else {
                        foreach($data['getimgbypro'] as $imgbypro){

                            echo '<div class="carousel-cell3">
                                <img class="img-product-li" src="'.$imgbypro['tenHinh'].'" alt="" />
                            </div>
                            ';
                            }
                    }
                   
                }
            ?>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
                if(!empty($data['allsanpham'])){
                    
                   $product = $data['allsanpham'];
                        echo '<div class="detail-product">
                        <div class="product-header d-flex align-items-center justify-content-between">
                            <ul class="product-list pl-4">
                                <li class="itemli2">
                                    <span class="span-itemli">Phòng ngủ: </span>'.$product['pNgu'].'
                                </li>
                                <li class="itemli3">
                                    <span class="span-itemli">Phòng tắm: </span>'.$product['pTam'].'
                                </li>
                                <li class="itemli4">
                                    <span class="span-itemli">Diện tích: </span> '.$product['dienTich'].'m2
                                </li>
                            </ul>
                            <div class="price-product">'.number_format($product['gia'] / 1000000, 2, ',', '.').' triệu đồng</div>
                        </div>
                        <hr />
                        <div class="title-product">
                            <h3 class="title-h3">'.$product['tenSP'].'</h3>
                            <div class="box-product-item">
                                <span class="item-ban"> '.$product['tenHT'].' </span>
                                <span class="item-hot">hot</span>
                            </div>
                        </div>
                        <div class="content-product">
                            <ul>
                                <li class="itemli1">
                                    <span> '.$product['diaChi'].'</span>
                                </li>
                                <li><span>Tỉnh:</span>'.$product['tinh'].'</li>
                                <li><span>Kiểu dự án:</span>'.$product['tenLoai'].'</li>
                                
                            </ul>
                            <div class="button-search">
                                <a href="/nienluanCNTT/sanpham/datlich/'.$product['idSP'].'" type="button" class="btn btn-primary px-5 h-100 btn-search d-flex align-items-center">
                                    <img class="mr-1" src="/nienluanCNTT/public/img/dathang.webp" alt="" />
                                    Đặt Hàng
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product my-3">
                        <h3>Tổng Quan</h3>
                        <p>'.$product['moTa'].'</p>
                        </div>
                        <div class="map-product">
                            Địa Chỉ
                            '.$product['map'].'
                        </div>
                         ';
                    }
                
                ?>
        </div>
    </div>
</div>