<div class="container background-themsp pb-3">
    <h1 class="title-add-product w-100">
        Sửa Thông Tin Người Dùng
    </h1>

    <div class="container">
        <?php
            $users=$data['getalluser'];
        ?>
        <form method="post">

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="<?=$users['tenUser']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" id="inputPassword" placeholder="Password"
                        value="<?=$users['email']?>" required>

                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">SDT</label>
                <div class="col-sm-10">
                    <input name="SDT" type="text" class="form-control" id="inputPassword" placeholder="Password"
                        value="<?=$users['SDT']?>" required>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>