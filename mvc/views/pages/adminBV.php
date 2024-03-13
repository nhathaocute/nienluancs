<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Quản Lý Bài Viết
    </h1>
    <table class="table my-3">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">id</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">tên loại</th>
                <th scope="col">tên hình thức</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['allsanpham'])){
                    
                    foreach($data['allsanpham'] as $key => $sanpham){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                        <th scope="row">'.$sanpham['idSP'].'</th>
                        <td class="content-table">'.$sanpham['tenSP'].'</td>
                        
                        <td>
                        '.$sanpham['tenLoai'].'
                        </td>
                        <td>
                        '.$sanpham['tenHT'].'
                        </td>
                        <td>
                            <div class="operation">
                        
                            <a href="/nienluanCNTT/admin/updatesp/'.$sanpham['idSP'].'" class="btn btn-success">Sửa</a>
                            <a href="/nienluanCNTT/admin/deletesp/'.$sanpham['idSP'].'" class="btn btn-danger">Xóa</a>
                            <a href="/nienluanCNTT/admin/hinh/'.$sanpham['idSP'].'" class="btn btn-primary">image</a>
                            </div>
                        </td>
                    </tr>';
                    }
                }
                ?>
        </tbody>
    </table>
</div>