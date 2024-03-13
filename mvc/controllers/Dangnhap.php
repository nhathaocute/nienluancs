<?php


class Dangnhap extends Controller {

   
   
    function Loading(){        
        
        $user = $this->model('UserModel');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST)){

                $goiuser = $user->dangnhap($_POST);
                $_POST = [];
                if($goiuser) {
                    redirect('/nienluanCNTT/home');
                } else{

                    echo "<script>alert('dang nhap that bai');</script>";
                }
            }
        }

        $this->view("indexGT", [
            "page"=>"dangnhap",
            "css"=>"dangnhap",
            "js"=>"index",
            "title"=>"đăng nhập"
            
        ]);
    }
}
?>