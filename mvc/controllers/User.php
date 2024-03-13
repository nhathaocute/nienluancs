<?php


class User extends Controller {
    public function __construct() {
        if(isset($_COOKIE['idUser'])) {
            
            $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
            if(empty($admin)) {
                redirect('/nienluanCNTT');
            }
        } else {
            redirect('/nienluanCNTT/Dangnhap');
        }
    }

    function thongtinnguoidung(){
        $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $adminName= '';
        if(!empty($admin)){
            $adminName .= $admin['tenUser'];
        }
        $users = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $this->view("indexGT", [
            "page"=>"user",
            "css"=>"admin",        
            "getalluser"=>$users,
            "admin-child"=>"userinfo",
            "tenUser"=>$adminName
        ]);
        
       
    }

    function updateuser(string $id){
        $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $adminName= '';
        if(!empty($admin)){
            $adminName .= $admin['tenUser'];
        }
        if(strlen($id) == 0) {
            redirect('/nienluanCNTT/user/thongtinnguoidung');
        }
        $users = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        if(!$users){
            die('đã xãy ra lỗi');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(!empty($_POST)) {
                $_POST['idUser'] = $id;
                $updateUserById = ($this->model('UserModel'))->updateuser($_POST);
    
                if($updateUserById) {
                    redirect('/nienluanCNTT/user/thongtinnguoidung');
                } else {
                    echo "<script>alert('Sửa thông tin thất bại, vui lòng thực hiện lại!');</script>";
                }
    
            }
        }
        $this->view("indexGT", [
            "page"=>"user",
            "css"=>"admin",        
            "getalluser"=>$users,
            "admin-child"=>"userupdate",
            "tenUser"=>$adminName
        ]);
        
       
    }

    function lichdadat(string $id){
        $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $adminName= '';
        if(!empty($admin)){
            $adminName .= $admin['tenUser'];
        }

        
        if(strlen($id) == 0) {
            redirect('/nienluanCNTT/user/thongtinnguoidung');
        }
        $users = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        if(!$users){
            die('đã xãy ra lỗi');
        }
        $chuadatlich = ($this->model('lichdat'))->dadatlich($_COOKIE['idUser']);
        $ld = [];

            if(!empty($chuadatlich)){
                foreach($chuadatlich as $pro){
                    $user = ($this->model('UserModel'))->getuserbyid($pro['idUser']);
                    $pro['tenUser'] = $user['tenUser'];
                
                    $sanpham = ($this->model('product'))->getProductID($pro['idSP']);
                    $pro['tenSP'] = $sanpham['tenSP'];
                    $pro['gia'] = $sanpham['gia'];
                    $ld[]= $pro;
                }
                
            }
        $this->view("indexGT", [
            "page"=>"user",
            "css"=>"admin",        
            "getalluser"=>$users,
            "lichdadat" => $ld,
            "admin-child"=>"userBooked",
            "tenUser"=>$adminName
        ]);
        
       
    }

    function lichchuadat(string $id){
        $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $adminName= '';
        if(!empty($admin)){
            $adminName .= $admin['tenUser'];
        }

        
        if(strlen($id) == 0) {
            redirect('/nienluanCNTT/user/thongtinnguoidung');
        }
        $users = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        if(!$users){
            die('đã xãy ra lỗi');
        }
        $chuadatlich = ($this->model('lichdat'))->chuadatlich($_COOKIE['idUser']);
        $ld = [];

            if(!empty($chuadatlich)){
                foreach($chuadatlich as $pro){
                    $user = ($this->model('UserModel'))->getuserbyid($pro['idUser']);
                    $pro['tenUser'] = $user['tenUser'];
                
                    $sanpham = ($this->model('product'))->getProductID($pro['idSP']);
                    $pro['tenSP'] = $sanpham['tenSP'];
                    $pro['gia'] = $sanpham['gia'];
                    $ld[]= $pro;
                }
                
            }
        $this->view("indexGT", [
            "page"=>"user",
            "css"=>"admin",        
            "getalluser"=>$users,
            "lichdadat" => $ld,
            "admin-child"=>"userNoBooked",
            "tenUser"=>$adminName
        ]);
        
       
    }
    
   
//    thi de lam di do
    function Loading(){    
        $admin = ($this->model('UserModel'))->getuserbyid($_COOKIE['idUser']);
        $adminName= '';
        if(!empty($admin)){
            $adminName .= $admin['tenUser'];
        }
        
        $this->view("indexGT", [
            "page"=>"user",
            "css"=>"admin",
            "js"=>"index",
            "tenUser"=>$adminName
        ]);
    }


    //themsp
    
}
?>