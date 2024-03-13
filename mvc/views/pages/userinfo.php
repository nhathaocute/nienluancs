<div class="container background-themsp pb-3">
    <h1 class="title-add-product w-100">
        Thông Tin Người Dùng
    </h1>

    <div class="container">
        <?php
                       if(!empty($data['getalluser'])) {
                     $users=$data['getalluser'];
                            echo '
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="'.$users['tenUser'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="'.$users['email'].'">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SDT</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="'.$users['SDT'].'">
            </div>
        </div>
    
' ;
                               
            }
                    ?>
    </div>
</div>