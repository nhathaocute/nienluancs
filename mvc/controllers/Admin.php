<?php


class Admin extends Controller {

    public function __construct() {
        if(isset($_COOKIE['idAdmin'])) {
            
            $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
            if(empty($admin)) {
                redirect('/nienluanCNTT');
            }
        } else {
            redirect('/nienluanCNTT/Dangnhapadmin');
        }
    }

    


    //muon lam gi thi ten ham do
   
   function addadmin(){
    $admin = $this->model('AdminModel');
    $alladmin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($alladmin)){
            $adminName .= $alladmin['tenAdmin'];
        }
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){

            $goiadmin = $admin->dangky($_POST);
            $_POST = [];
            if($goiadmin) {
                redirect('/nienluanCNTT/admin');
            } else{

                echo "<script>alert('dang ky that bai');</script>";
            }
        }
    }
        
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            "tenAdmin"=>$adminName,
            "admin-child"=>'adminAddAdmin',
        ]);
   }

   function deletesp(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/sanpham');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $xoa = ($this->model('product'))->deleteSPById($id);
        if($xoa) {
            redirect('/nienluanCNTT/admin/sanpham');
        } else{

            echo "<script>alert('xóa thất bại');</script>";
        }
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        "js"=>"index",
        "admin-child"=>'adminXoaLoai',
        "tenAdmin"=>$adminName,
    ]);
   }

   function deleteLoai(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/hienthiloai');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<script>alert('xóa thất bại');</script>";
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        "js"=>"index",
        "admin-child"=>'adminXoaLoai',
        "tenAdmin"=>$adminName,
    ]);
   }
   function deleteHT(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/hienthiHT');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<script>alert('xóa thất bại');</script>";
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        "js"=>"index",
        "admin-child"=>'adminXoaLoai',
        "tenAdmin"=>$adminName,
    ]);
   }


   function updateloai(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/hienthiloai');
    }
    $getTypeByID = ($this->model('typeOfProduct'))->getTypeID($id);
    if(!$getTypeByID){
        die('Loại không tồn tại');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST)) {
           
            $updateTypeById = ($this->model('typeOfProduct'))->updateLoai($id, $_POST);

            if($updateTypeById) {
                redirect('/nienluanCNTT/admin/hienthiloai');
            } else {
                echo "<script>alert('Sửa loại thất bại, vui lòng thực hiện lại!');</script>";
            }

        }
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        'admin-child' => 'adminUpdateLoai',
        'getTypeByID'=> $getTypeByID,
        "tenAdmin"=>$adminName
    ]);
   }
   function updateHT(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/hienthihinhthuc');
    }
    $getTypeByID = ($this->model('hinhthuc'))->getHinhThucById($id);
    if(!$getTypeByID){
        die('Loại không tồn tại');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST)) {
           
            $updateTypeById = ($this->model('hinhthuc'))->updateHT($id, $_POST);

            if($updateTypeById) {
                redirect('/nienluanCNTT/admin/hienthihinhthuc');
            } else {
                echo "<script>alert('Sửa loại thất bại, vui lòng thực hiện lại!');</script>";
            }

        }
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        'admin-child' => 'adminUpdateHT',
        'getTypeByID'=> $getTypeByID,
        "tenAdmin"=>$adminName
    ]);
   }
   
    //sua san pham
   function updatesp(string $id){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    if(strlen($id) == 0) {
        redirect('/nienluanCNTT/admin/sanpham');
    }
    $loai = ($this->model('typeOfProduct'))->getLoaiAll();
    $hinhthuc = ($this->model('hinhthuc'))->getHTAll();
    $getProById = ($this->model('product'))->getProductID($id);
    if(!$getProById){
        die('sản phẩm không tồn tại');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST)) {
           
            $updateProductById = ($this->model('product'))->updatebv($id, $_POST);

            if($updateProductById) {
                redirect('/nienluanCNTT/admin/sanpham');
            } else {
                echo "<script>alert('Sửa sản phẩm thất bại, vui lòng thực hiện lại!');</script>";
            }

        }
    }

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"admin",
        'loai' => $loai,
        'hinhthuc'=> $hinhthuc,
        'admin-child' => 'adminUpdateBV',
        'getProById'=> $getProById,
        "tenAdmin"=>$adminName
    ]);
   }

   function sanpham(){
    

    $sanpham = ($this->model('product'))->allsanpham();
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
    $product = [];

    if(!empty($sanpham)){
        foreach($sanpham as $pro){
            $loai = ($this->model('typeofproduct'))->getLoaiById($pro['idLoai']);
            $pro['tenLoai'] = $loai['tenLoai'];
           
            $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($pro['idHT']);
            $pro['tenHT'] = $hinhthuc['tenHT'];
            $product[]= $pro;
        }
        
    }
       
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            
            "allsanpham"=>$product,
            "admin-child"=>'adminBV',
            "tenAdmin"=>$adminName
        ]);
   }


   function themhinh($id){
    if(strlen($id)==0){
        redirect('/nienluanCNTT/admin/sanpham');
    }
    
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
    $adminName= '';
   
    if(!empty($admin)){
        $adminName .= $admin['tenAdmin'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){
            $data = $_POST;
            $data['idSP']= $id;
            $check = ($this->model('image'))->themhinh($data);
            $_POST = [];
            
            if($check) {
                redirect("/nienluanCNTT/admin/hinh/$id");
            } else{

                echo "<script>alert('thêm thất bại');</script>";
            }
        }
    }
    

    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"themsp",
        "js"=>"index",
        
        "admin-child"=>'adminAddHinh',
        "tenAdmin"=>$adminName
    ]);
   }

   function hinh($id){
    if(strlen($id)==0){
        redirect('/nienluanCNTT/admin/sanpham');
    }
    $getimgbypro = ($this->model('image'))->getImgIdSP($id);
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            "idSP"=> $id,
            "getimgbypro"=>$getimgbypro,
            "admin-child"=>"adminImage",
            "tenAdmin"=>$adminName,
        ]);
   }
   


   function themsp(){
    $loai = ($this->model('typeofproduct'))->getLoaiAll();
    $hinhthuc = ($this->model('hinhthuc'))->getHTAll();
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){
            $data = $_POST;
            $check = ($this->model('product'))->themsp($data);
            $_POST = [];
            
            if($check) {
                redirect('/nienluanCNTT/admin/sanpham');
            } else{

                echo "<script>alert('them that bai');</script>";
            }
        }
    }
    
    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"themsp",
        "js"=>"index",
        "loai"=>$loai,
        "hinhthuc"=>$hinhthuc,
        "admin-child"=>'themsp',
        "tenAdmin"=>$adminName
        
    ]);
   }

   //them loai
   function themloai(){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){
            
            $check = ($this->model('typeofproduct'))->themloai($_POST);
            $_POST = [];
            
            if($check) {
                redirect('/nienluanCNTT/admin/hienthiloai');
            } else{

                echo "<script>alert('them that bai');</script>";
            }
        }
    }
    
    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"themsp",   
        "admin-child"=>'adminAddLoai',
        "tenAdmin"=>$adminName,
    ]);
   }
   function themHT(){
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){
            $check = ($this->model('hinhthuc'))->themhinhThuc($_POST);
            $_POST = [];
            
            if($check) {
                redirect('/nienluanCNTT/admin/hienthihinhthuc');
            } else{

                echo "<script>alert('them that bai');</script>";
            }
        }
    }
    
    $this->view("indexGT", [
        "page"=>"admin",
        "css"=>"themsp",   
        "admin-child"=>'adminAddHT',
        "tenAdmin"=>$adminName,
    ]);
   }

   //hien thi loai
   function hienthiloai(){
    $hienthiloai = ($this->model('typeofproduct'))->getLoaiAll();
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "allloai"=>$hienthiloai,
            "admin-child"=>'adminLoai',
            "tenAdmin"=>$adminName,
        ]);
   }
   function hienthihinhthuc(){
    $hienthihinhthuc = ($this->model('hinhthuc'))->getHTAll();
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "allHT"=>$hienthihinhthuc,
            "admin-child"=>'adminHT',
            "tenAdmin"=>$adminName,
        ]);
   }
   function danhsachadmin(){    
        
    $listadmin = ($this->model('AdminModel'))->getalladmin($_COOKIE['idAdmin']);
    $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
    
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            "listadmin"=>$listadmin,
            "admin-child"=>'adminListAdmin',
            "tenAdmin"=>$adminName,
        ]);
    }
    function danhsachuser(){    
        
        $listuser = ($this->model('UserModel'))->getalluser();
        $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
            $adminName= '';
        
            if(!empty($admin)){
                $adminName .= $admin['tenAdmin'];
            }
            $this->view("indexGT", [
                "page"=>"admin",
                "css"=>"admin",
                "js"=>"index",
                "listuser"=>$listuser,
                "admin-child"=>'adminListUser',
                "tenAdmin"=>$adminName,
            ]);
    }
    
    function deleteadmin(string $id){
        $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
            $adminName= '';
           
            if(!empty($admin)){
                $adminName .= $admin['tenAdmin'];
            }
        if(strlen($id) == 0) {
            redirect('/nienluanCNTT/admin/danhsachadmin');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $xoa = ($this->model('AdminModel'))->deleteAdminById($id);
            if($xoa) {
                redirect('/nienluanCNTT/admin/danhsachadmin');
            } else{
    
                echo "<script>alert('xóa thất bại');</script>";
            }
        }
    
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            "admin-child"=>'adminXoaLoai',
            "tenAdmin"=>$adminName,
        ]);
       }

       function danhsachlichdat(){    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(!empty($_POST)) {
                
                    $updateld = ($this->model('lichdat'))->updatelich($_POST['idDL']);
        
                    if($updateld) {
                        redirect('/nienluanCNTT/admin/danhsachlichdat');
                    } else {
                        echo "<script>alert('Sửa sản phẩm thất bại, vui lòng thực hiện lại!');</script>";
                    }
        
                }
            }
    
            $lichdat = ($this->model('lichdat'))->alldatlich();
            $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
            $adminName= '';
        
            if(!empty($admin)){
                $adminName .= $admin['tenAdmin'];
            }
            $ld = [];

            if(!empty($lichdat)){
                foreach($lichdat as $pro){
                    $user = ($this->model('UserModel'))->getuserbyid($pro['idUser']);
                    $pro['tenUser'] = $user['tenUser'];
                
                    $sanpham = ($this->model('product'))->getProductID($pro['idSP']);
                    $pro['tenSP'] = $sanpham['tenSP'];
                    $ld[]= $pro;
                }
                
            }
            
                    $this->view("indexGT", [
                        "page"=>"admin",
                        "css"=>"admin",
                        "lichdat"=>$ld,
                        "admin-child"=>'adminAcceptDL',
                        "tenAdmin"=>$adminName,
                    ]);
                }
        
        

        function deleteLich(string $id){
            $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
                $adminName= '';
               
                if(!empty($admin)){
                    $adminName .= $admin['tenAdmin'];
                }
            if(strlen($id) == 0) {
                redirect('/nienluanCNTT/admin/hienthiloai');
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $xoa = ($this->model('lichdat'))->deleteLichById($id);
                if($xoa) {
                    redirect('/nienluanCNTT/admin/danhsachlichdat');
                } else{
        
                    echo "<script>alert('xoa that bai');</script>";
                }
            }
        
            $this->view("indexGT", [
                "page"=>"admin",
                "css"=>"admin",
                "js"=>"index",
                "admin-child"=>'adminXoaLoai',
                "tenAdmin"=>$adminName,
            ]);
           }


           function thongke(){
            $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
                $adminName= '';
               
                if(!empty($admin)){
                    $adminName .= $admin['tenAdmin'];
                }
                $active = 0;
                $namdat = ($this->model('lichdat'))->thongke();
                if(!empty($namdat)) $active = $namdat[0]['year'];
            $lichdat = ($this->model('lichdat'))->thongkenam();
            $countld = ($this->model('lichdat'))->thongkenamcount();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(!empty($_POST)) {
            $countld = ($this->model('lichdat'))->thongkenamcount($_POST['ngayDat']);
            $lichdat = ($this->model('lichdat'))->thongkenam($_POST['ngayDat']);
                    $active = $_POST['ngayDat'];
                }
            }
            $ld = [];

            if(!empty($lichdat)){
                foreach($lichdat as $pro){
                    $user = ($this->model('UserModel'))->getuserbyid($pro['idUser']);
                    $pro['tenUser'] = $user['tenUser'];
                
                    $sanpham = ($this->model('product'))->getProductID($pro['idSP']);
                    $pro['tenSP'] = $sanpham['tenSP'];
                    $ld[]= $pro;
                }
                
            }
          
            $this->view("indexGT", [
                "page"=>"admin",
                "css"=>"admin",
                "js"=>"index",
                "thongkenam"=>$namdat,
                "loclichdat"=>$ld,
                "admin-child"=>'adminStatistical',
                "tenAdmin"=>$adminName,
                "active" => $active,
                "countld" => $countld
            ]);
           }


   

//    thi de lam di do
    function Loading(){    
        
        $admin = ($this->model('AdminModel'))->alladmin($_COOKIE['idAdmin']);
        $adminName= '';
       
        if(!empty($admin)){
            $adminName .= $admin['tenAdmin'];
        }
        
        $this->view("indexGT", [
            "page"=>"admin",
            "css"=>"admin",
            "js"=>"index",
            
            "tenAdmin"=>$adminName,
        ]);
    }
    
}
?>