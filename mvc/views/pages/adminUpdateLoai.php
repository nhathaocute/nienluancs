<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Sửa loại
    </h1>
    <form method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">tên loại</span>
            </div>
            <input name="tenLoai" type="text" class="form-control" required placeholder="tên loại" aria-label="Username"
                aria-describedby="basic-addon1" value="<?php if (isset($data['getTypeByID']) && !empty($data['getTypeByID'])) {
                    echo $data['getTypeByID']['tenLoai'];
                } ?>">
        </div>
        <button type="submit" class="btn btn-success my-3">sửa</button>
    </form>
</div>