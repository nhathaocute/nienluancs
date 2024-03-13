<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Quản Lý Hình Ảnh
    </h1>
    <a href="/nienluanCNTT/admin/themhinh/<?=$data['idSP']?>" class="btn btn-success">Thêm</a>

    <table class="table my-3">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">tên hình</th>
                <th scope="col">hình</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['getimgbypro'])){
                    
                    foreach($data['getimgbypro'] as $key => $image){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                        <td class="content-table">'.$image['tenHinh'].'</td>
                        
                        <td>
                        <img width="100%" src="'.$image['tenHinh'].'" alt="" />
                        </td>
                        
                        <td>
                            <div class="operation">
                        
                            
                            <a href="/nienluanCNTT/admin/deletesp/'.$image['idSP'].'" class="btn btn-danger">Xóa</a>
                            </div>
                        </td>
                    </tr>';
                    }
                }
                ?>

        </tbody>
    </table>
</div>