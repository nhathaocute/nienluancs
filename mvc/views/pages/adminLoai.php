<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Quản lí loại
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">id</th>
                <th scope="col">tên loại</th>
                <th scope="col">thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['allloai'])){
                    
                    foreach($data['allloai'] as $key => $hienthiloai){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$hienthiloai['idLoai'].'</th>
                                <td>'.$hienthiloai['tenLoai'].'</td>
                                <td>
                            <div class="operation">
                        
                            <a href="/nienluanCNTT/admin/updateloai/'.$hienthiloai['idLoai'].'" class="btn btn-success">Sửa</a>
                            <a href="/nienluanCNTT/admin/deleteLoai/'.$hienthiloai['idLoai'].'" class="btn btn-danger">Xóa</a>
                               
                            </div>
                        </td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>