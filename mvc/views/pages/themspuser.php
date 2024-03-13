<div class="container" style="padding-top: 138px;">
    <h1 class="title-add-product w-100 text-center">
        Thêm Sản Phẩm
    </h1>
    <form method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">ten sp</span>
            </div>
            <input name="tenSP" type="text" class="form-control" required placeholder="ten san pham"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">dien tich (m2)</span>
            </div>
            <input name="dienTich" type="text" class="form-control" required placeholder="ten san pham"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">dia chi</span>
            </div>
            <input name="diaChi" type="text" class="form-control" required placeholder="ten san pham"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">gia</span>
            </div>
            <input name="gia" type="text" class="form-control" required placeholder="ten san pham" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">phong ngu</label>
            <select name="pNgu" class="form-control" id="exampleFormControlSelect1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">phong tam</label>
            <select name="pTam" class="form-control" id="exampleFormControlSelect1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">hinh thuc</label>
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
            <label for="exampleFormControlSelect1">loai</label>
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
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">hinh anh</span>
            </div>
            <input name="image" type="text" class="form-control" required placeholder="ten san pham"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">mo ta</label>
            <textarea name="moTa" class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">them</button>
    </form>
</div>