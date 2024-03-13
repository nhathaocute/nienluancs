<div class="container background-themsp">
    <h1 class="title-add-product w-100">
        Danh sách tài khoản Admin
    </h1>
    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">id</th>
                <th scope="col">tên người dùng</th>
                <th scope="col">sdt</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($data['listuser'])){
                    foreach($data['listuser'] as $key => $listuser){
                        echo '<tr>
                        <td>'.($key+1).'</td>
                                <th scope="row">'.$listuser['idUser'].'</th>
                                <td>'.$listuser['tenUser'].'</td>
                                <td>'.$listuser['SDT'].'</td>
                                <td>'.$listuser['email'].'</td>
                            </tr>';
                    }
                }
                ?>


        </tbody>
    </table>
</div>