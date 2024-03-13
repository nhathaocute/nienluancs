<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        duyệt lịch khách hàng
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">idDL</th>
                <th scope="col">ngày đặt</th>
                <th scope="col">giờ đặt</th>
                <th scope="col">tên user</th>
                <th scope="col">tên sản phẩm</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['lichdat'])){
                    foreach($data['lichdat'] as $key => $lichdat){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$lichdat['idDL'].'</th>
                                <td>'.$lichdat['ngayDat'].'</td>
                                <td>'.$lichdat['gioDat'].'</td>
                                <td>'.$lichdat['tenUser'].'</td>
                                <td>'.$lichdat['tenSP'].'</td>
                                <td>
                                    <div class="operation">
                                    <form method="post">
                                        <input type="hidden" name="idDL" value="'.$lichdat['idDL'].'">
                                        <button type="submit" class="btn btn-primary">chấp nhận</button>
                                    </form>
                                    <a href="/nienluanCNTT/admin/deleteLich/'.$lichdat['idDL'].'" class="btn btn-danger">Xóa</a>
                                        
                                    </div>
                                </td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>