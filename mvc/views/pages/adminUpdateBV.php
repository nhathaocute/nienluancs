<?php
$tinhThanh = array(
    "An Giang",
    "Bà Rịa-Vũng Tàu",
    "Bắc Giang",
    "Bắc Kạn",
    "Bạc Liêu",
    "Bắc Ninh",
    "Bến Tre",
    "Bình Định",
    "Bình Dương",
    "Bình Phước",
    "Bình Thuận",
    "Cà Mau",
    "Cần Thơ",
    "Cao Bằng",
    "Đà Nẵng",
    "Đắk Lắk",
    "Đắk Nông",
    "Điện Biên",
    "Đồng Nai",
    "Đồng Tháp",
    "Gia Lai",
    "Hà Giang",
    "Hà Nam",
    "Hà Nội",
    "Hà Tĩnh",
    "Hải Dương",
    "Hải Phòng",
    "Hậu Giang",
    "Hòa Bình",
    "Hưng Yên",
    "Khánh Hòa",
    "Kiên Giang",
    "Kon Tum",
    "Lai Châu",
    "Lâm Đồng",
    "Lạng Sơn",
    "Lào Cai",
    "Long An",
    "Nam Định",
    "Nghệ An",
    "Ninh Bình",
    "Ninh Thuận",
    "Phú Thọ",
    "Quảng Bình",
    "Quảng Nam",
    "Quảng Ngãi",
    "Quảng Ninh",
    "Quảng Trị",
    "Sóc Trăng",
    "Sơn La",
    "Tây Ninh",
    "Thái Bình",
    "Thái Nguyên",
    "Thanh Hóa",
    "Thừa Thiên-Huế",
    "Tiền Giang",
    "TP HCM",
    "Trà Vinh",
    "Tuyên Quang",
    "Vĩnh Long",
    "Vĩnh Phúc",
    "Yên Bái"
);


?>
<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Thêm Bài Viết
    </h1>
    <form method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">tên bài viết</span>
            </div>
            <input name="tenSP" type="text" class="form-control" required placeholder="tên bài viết"
                aria-label="Username" aria-describedby="basic-addon1" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['tenSP'];
                } ?>">
        </div>
        <small id="emailHelp" class="form-text text-muted">nhập diện tích phải là số</small>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">diện tích (m2)</span>
            </div>
            <input name="dienTich" type="text" class="form-control" required placeholder="diện tích"
                aria-label="Username" aria-describedby="basic-addon1" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['dienTich'];
                } ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">địa chỉ</span>
            </div>
            <input name="diaChi" type="text" class="form-control" required placeholder="địa chỉ" aria-label="Username"
                aria-describedby="basic-addon1" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['diaChi'];
                } ?>">
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zlG-rWk8so8" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <small id="emailHelp" class="form-text text-muted">admin vui lòng làm theo video hướng dẫn để có thể lấy được
            tọa độ bản đồ</small>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">map</label>
            <textarea name="map" class="form-control" required id="exampleFormControlTextarea1" rows="3"><?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['map'];
                } ?></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">giá</span>
            </div>
            <input name="gia" type="text" class="form-control" required placeholder="giá" aria-label="Username"
                aria-describedby="basic-addon1" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['gia'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Tỉnh/Thành phố</label>
            <select name="tinh" class="form-control" id="exampleFormControlSelect2">
                <?php
                for($i = 0; $i < count($tinhThanh); $i++) {
                    if($data['getProById']['tinh'] == $tinhThanh[$i]) {
                        echo'<option value="'.$tinhThanh[$i].'" selected>'.$tinhThanh[$i].'</option>';
                        continue;
                    }
                    echo'<option value="'.$tinhThanh[$i].'">'.$tinhThanh[$i].'</option>';
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">phòng ngủ</label>
            <select name="pNgu" class="form-control" id="exampleFormControlSelect1">
                <?php
                for($i = 0; $i <= 5; $i++) {
                    if($data['getProById']['pNgu'] == $i) {
                        echo'<option value="'.$i.'" selected>'.$i.'</option>';
                        continue;
                    }
                    echo'<option value="'.$i.'">'.$i.'</option>';
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">phòng tắm</label>
            <select name="pTam" class="form-control" id="exampleFormControlSelect1">
                <?php
                for($i = 0; $i <= 5; $i++) {
                    if($data['getProById']['pTam'] == $i) {
                        echo'<option value="'.$i.'" selected>'.$i.'</option>';
                        continue;
                    }
                    echo'<option value="'.$i.'">'.$i.'</option>';
                } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">hình thức</label>
            <select name="idHT" class="form-control mb-4" id="exampleFormControlSelect1">
                <?php 
                    if(!empty($data['hinhthuc'])) {
                        foreach($data['hinhthuc'] as $hinhthuc) {
                            $param = "";
                            if($data['getProById']['idHT'] == $hinhthuc['idHT']) {
                                $param .= "selected";
                            }
                            echo '
                            <option value="'.$hinhthuc['idHT'].'" '.$param.'>'.$hinhthuc['tenHT'].'</option>
                            ';
                        }
                    }
                ?>



            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">loại</label>
            <select name="idLoai" class="form-control mb-4" id="exampleFormControlSelect1">
                <?php 
                    if(!empty($data['loai'])) {
                        foreach($data['loai'] as $loai) {
                            $param = "";
                            if($data['getProById']['idLoai'] == $loai['idLoai']) {
                                $param .= "selected";
                            }
                            echo '
                            <option value="'.$loai['idLoai'].'"'.$param.'>'.$loai['tenLoai'].'</option>
                            ';
                        }
                    }
                ?>



            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">mô tả</label>
            <textarea name="moTa" class="form-control" required id="exampleFormControlTextarea1" rows="3"><?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['moTa'];
                } ?></textarea>
        </div>

        <button type="submit" class="btn btn-success my-3">thêm</button>
    </form>
</div>