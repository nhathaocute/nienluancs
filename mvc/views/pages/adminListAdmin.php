<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Danh sách tài khoản Admin
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">id</th>
                <th scope="col">tên admin</th>
                <th scope="col">sdt</th>
                <th scope="col">email</th>
                <th scope="col">thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['listadmin'])){
                    foreach($data['listadmin'] as $key => $listadmin){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$listadmin['idAdmin'].'</th>
                                <td>'.$listadmin['tenAdmin'].'</td>
                                <td>'.$listadmin['SDT'].'</td>
                                <td>'.$listadmin['email'].'</td>
                                <td>
                                    <div class="operation">
                                    <a href="/nienluanCNTT/admin/deleteadmin/'.$listadmin['idAdmin'].'" class="btn btn-danger">Xóa</a>
                                        
                                    </div>
                                </td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>