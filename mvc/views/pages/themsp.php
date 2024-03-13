<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Thêm Bài Viết
    </h1>
    <form method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">tên bất động sản</span>
            </div>
            <input name="tenSP" type="text" class="form-control" required placeholder="nhập tên của bất động sản"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <small id="emailHelp" class="form-text text-muted">nhập diện tích phải là số</small>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">diện tích (m2)</span>
            </div>
            <input name="dienTich" type="text" class="form-control" required placeholder="nhập diện tích phải là số"
                aria-label="Username" aria-describedby="basic-addon1" pattern="[0-9]+" title="Vui lòng chỉ nhập số">

        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">địa chỉ</span>

            </div>
            <input name="diaChi" type="text" class="form-control" required placeholder="nhập địa chỉ của bất động sản"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zlG-rWk8so8" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <small id="emailHelp" class="form-text text-muted">admin vui lòng làm theo video hướng dẫn để có thể lấy được
            tọa độ bản đồ</small>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">bản đồ</label>
            <textarea name="map" class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <small id="emailHelp" class="form-text text-muted">nhập giá phải là số</small>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">giá</span>
            </div>
            <input name="gia" type="text" class="form-control" required placeholder="giá" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <small id="emailHelp" class="form-text text-muted">chọn tỉnh nếu không chọn tỉnh sẽ mặc định là "An
            Giang"</small>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Tỉnh/Thành phố</label>
            <select name="tinh" class="form-control" id="exampleFormControlSelect2">
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

        <div class="form-group">
            <label for="exampleFormControlSelect2">phòng ngủ</label>
            <select name="pNgu" class="form-control" id="exampleFormControlSelect2">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect3">phòng tắm</label>
            <select name="pTam" class="form-control" id="exampleFormControlSelect3">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">hình thức</label>
            <select name="idHT" class="form-control mb-4" id="exampleFormControlSelect1">
                <?php 
                    if(!empty($data['hinhthuc'])) {
                        foreach($data['hinhthuc'] as $hinhthuc) {
                            echo '
                            <option value="'.$hinhthuc['idHT'].'">'.$hinhthuc['tenHT'].'</option>
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
                            echo '
                            <option value="'.$loai['idLoai'].'">'.$loai['tenLoai'].'</option>
                            ';
                        }
                    }
                ?>



            </select>
        </div>
        <small id="emailHelp" class="form-text text-muted">mô tả bất động sản có thể là chiều dài, rộng,....</small>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">mô tả</label>
            <textarea name="moTa" class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success my-3">thêm</button>
    </form>
</div>