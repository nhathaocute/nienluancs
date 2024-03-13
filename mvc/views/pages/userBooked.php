<div class="container background-themsp pb-3">
    <h1 class="title-add-product w-100">
        Lịch Đặt Đã Xác Nhận
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">idDL</th>
                <th scope="col">ngày đặt</th>
                <th scope="col">giờ đặt</th>
                <th scope="col">tên sản phẩm</th>
                <th scope="col">giá</th>
                <th scope="col">thao tác</th>

            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['lichdadat'])){
                    foreach($data['lichdadat'] as $key => $lichdat){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$lichdat['idDL'].'</th>
                                <td>'.$lichdat['ngayDat'].'</td>
                                <td>'.$lichdat['gioDat'].'</td>
                                <td>'.$lichdat['tenSP'].'</td>
                                <td>'.number_format($lichdat['gia'] / 1000000, 2, ',', '.').' triệu</td>
                                <td><a class="btn btn-primary" href="/nienluanCNTT/sanpham/chitietsp/'.$lichdat['idSP'].'"
                                 data-toggle="tooltip" data-placement="top" title="chi tiết sản phẩm"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>