<?php

define('LENGTH', 6);
class Sanpham extends Controller{

   
    // function Loading(){       
    //     $sanpham = ($this->model('product'))->getProductAllLimit(LENGTH);
         
    //     $product = [];
    // if(!empty($sanpham)){
    //     foreach($sanpham as $pro){
    //         $loai = ($this->model('typeofproduct'))->getLoaiById($pro['idLoai']);
    //         $pro['tenLoai'] = $loai['tenLoai'];
           
    //         $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($pro['idHT']);
    //         $pro['tenHT'] = $hinhthuc['tenHT'];
    //         $product[]= $pro;
    //     }
        
    // }

    function search (){
        $arrSearch = ($this->model('product'))->getProductAllLimit(LENGTH);
        $loai = ($this->model('typeofproduct'))->getLoaiAll();
        $arrSearch = [];
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
                if(!empty($_GET)) {
                    $get = $_GET;
                    if(array_key_exists('url', $get)) {
                        unset($get['url']);
                    }
                    
                    $check = false;
                    foreach($get as $key => $value) {
                        if(strlen($value) != 0) {
                            $check = true;
                            break;
                        }
                    }
                    $data = [];
                    foreach($get as $key => $value) {
                        if(strlen($value) != 0) {
                            $data[$key] = $value;
                        }
                    }
                    if(!$check) {
                        redirect('/nienluanCNTT/home');
                    }
                    $arrSearch = ($this->model('product'))-> searchProduct($data);
                    $_GET = [];
                }
            }
            
            $product = [];
            
            if(!empty($arrSearch)){
                foreach($arrSearch as $pro){
                    
                    $productimg = ($this->model('image'))->getImgIdSP($pro['idSP']);
                    $pro['listimage'] = $productimg;
                    $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($pro['idHT']);
                    $pro['tenHT'] = $hinhthuc['tenHT'];
                    $product[]= $pro;
                }
                
            }
            $this->view('index', [
                'page'=> 'showprobytype',
                'title'=> 'sản phẩm',
                'css' => 'gioithieu',
                'js' => 'home',
                "allloai"=>$loai,
                "allsanpham"=>$product
            ]);
            
    }

        function Chitietsp(string $id = ''){
            if(strlen($id)==0){
                die('sản phẩm không tồn tại');
            }
            $sanpham = ($this->model('product'))->getProductID($id);
            $htloai = ($this->model('typeofproduct'))->getLoaiAll();
            if(!empty($sanpham)){
                    $getimgbypro = ($this->model('image'))->getImgIdSP($id);
                    $loai = ($this->model('typeofproduct'))->getLoaiById($sanpham['idLoai']);
                    $sanpham['tenLoai'] = $loai['tenLoai'];
                
                    $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($sanpham['idHT']);
                    $sanpham['tenHT'] = $hinhthuc['tenHT'];
                
            }
    

            $this->view("chitietsp", [
                "page"=>"chitietsp",
                "css"=>"chitietsp",
                "js"=>"home",
                "allloai"=>$htloai,
                "getimgbypro"=>$getimgbypro,
                "gioithieu"=>"Chi Tiết Sản Phẩm",
                "allsanpham"=>$sanpham
            ]);
        }

        function datlich(string $id = ''){  
            if(strlen($id)==0){
                die('sản phẩm không tồn tại');
            }
            $datlich = $this->model('lichdat');
            // $sanpham = ($this->model('product'))->getProductID($id);
            // $user = ($this->model('UserModel'))->getalluser();
            // if(!empty($datlich)){
            //         $sanpham = ($this->model('product'))->getProductID($datlich['idSP']);
            //         $datlich['idSP'] = $sanpham['idSP'];
                
            //         $user = ($this->model('UserModel'))->getuserbyid($datlich['idUser']);
            //         $datlich['idUser'] = $user['idUser'];
                
            // }
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(!isset($_COOKIE['idUser'])){
                    redirect('/nienluan/dangnhap');
                }
                if(!empty($_POST)){
                    $_POST['idSP'] = $id;
                    $_POST['idUser'] = $_COOKIE['idUser'];
                    $userdatlich = $datlich->themlich($_POST);
                    $_POST = [];
                    if($userdatlich) {
                        redirect('/nienluanCNTT/home');
                    } else{
    
                        echo "<script>alert('dang ky that bai');</script>";
                    }
                }
            }
    
            $this->view("indexGT", [
                "page"=>"datlich",
                "css"=>"gioithieu",
                "datlich"=>$datlich
            ]);
        }

    function Loading(){       
        
        $sanpham = ($this->model('product'))->getProductAllLimit(LENGTH);
        $htloai = ($this->model('typeofproduct'))->getLoaiAll();
        
            $product = [];
        if(!empty($sanpham)){
            foreach($sanpham as $pro){
                $productimg = ($this->model('image'))->getImgIdSP($pro['idSP']);
                        $pro['listimage'] = $productimg;
                $loai = ($this->model('typeofproduct'))->getLoaiById($pro['idLoai']);
                $pro['tenLoai'] = $loai['tenLoai'];
            
                $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($pro['idHT']);
                $pro['tenHT'] = $hinhthuc['tenHT'];
                $product[]= $pro;
            }
            
        }
         
        
        $this->view("extra", [
            "page"=>"sanpham",
            "css"=>"gioithieu",
            "js"=>"home",
            "allloai"=>$htloai,
            "gioithieu"=>"Sản Phẩm",
            "allsanpham"=>$product
        ]);
    }
}
?>