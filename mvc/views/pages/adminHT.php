<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Quản lí hình thức
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">id</th>
                <th scope="col">tên hình thức</th>
                <th scope="col">thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['allHT'])){
                    
                    foreach($data['allHT'] as $key => $hienthihinhthuc){
                        
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$hienthihinhthuc['idHT'].'</th>
                                <td>'.$hienthihinhthuc['tenHT'].'</td>
                                <td>
                            <div class="operation">
                        
                            <a href="/nienluanCNTT/admin/updateHT/'.$hienthihinhthuc['idHT'].'" class="btn btn-success">Sửa</a>
                            <a href="/nienluanCNTT/admin/deleteHT/'.$hienthihinhthuc['idHT'].'" class="btn btn-danger">Xóa</a>
                               
                            </div>
                        </td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>