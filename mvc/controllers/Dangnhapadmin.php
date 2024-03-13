<?php


class Dangnhapadmin extends Controller {

   
   
    function Loading(){ 
        
        $admin = $this->model('AdminModel');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST)){

                $goiadmin = $admin->dangnhapadmin($_POST);
                $_POST = [];
                if($goiadmin) {
                    redirect('/nienluanCNTT/admin');
                } else{

                    echo "<script>alert('dang nhap that bai');</script>";
                }
            }
        }

        $this->view("indexGT", [
            "page"=>"dangnhapadmin",
            "css"=>"dangnhap",
            "js"=>"index",
            
        ]);
    }
}
?>