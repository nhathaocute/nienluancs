<?php


class Dangky extends Controller {

   
   
    function Loading(){    
        $user = $this->model('UserModel');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST)){
                
                $goiuser = $user->dangky($_POST);
                $_POST = [];
                if($goiuser) {
                    redirect('/nienluanCNTT/dangnhap');
                } else{

                    echo "<script>alert('dang ky that bai');</script>";
                }
            }
        }
        $this->view("indexGT", [
            "page"=>"dangky",
            "css"=>"dangnhap",
            "js"=>"index",
            "title"=>"đăng ký"
            
        ]);
    }
}
?>