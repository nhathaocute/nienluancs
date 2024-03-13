<form method="post">

    <div class="col-4 group-filter pl-0 mb-2">
        <select name="ngayDat" class="form-control form-control-lg w-100">
            <?php
        if(!empty($data['thongkenam'])) {
            foreach($data['thongkenam'] as $nam) {
                if($nam['year'] == $data['active']) {
                    echo '
                    <option value="'.$nam['year'].'" selected>'.$nam['year'].'</option>
                    ';
                }else {
                    echo '
                    <option value="'.$nam['year'].'">'.$nam['year'].'</option>
                    ';
                }
            }
        }
        ?>
        </select>
        <button type="submit" class="btn-submit">
            <i class="fa-solid fa-filter"></i>

        </button>
    </div>
</form>
<?php

    
        echo '<div class="alert alert-primary w-25">có '.$data['countld'].' lịch đặt</div>';
    

?>
<table class="table" style="background-color: #fff;">
    <thead>
        <tr>
            <th scope="col">stt</th>
            <th scope="col">idDL</th>
            <th scope="col">ngày đặt</th>
            <th scope="col">giờ đặt</th>
            <th scope="col">tên user</th>
            <th scope="col">tên sản phẩm</th>
        </tr>
    </thead>
    <tbody>
        <?php
                if(!empty($data['loclichdat'])){
                    foreach($data['loclichdat'] as $key => $lichdat){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$lichdat['idDL'].'</th>
                                <td>'.$lichdat['ngayDat'].'</td>
                                <td>'.$lichdat['gioDat'].'</td>
                                <td>'.$lichdat['tenUser'].'</td>
                                <td>'.$lichdat['tenSP'].'</td>
                                
                            </tr>';
                    }
                }
                ?>


    </tbody>
</table>