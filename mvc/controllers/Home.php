<?php

define('LENGTH', 6);
class Home extends Controller{

   
   
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
    
    function showProByType ($id){
        if(strlen($id)==0){
            redirect('/home');
        }
        
        $getprobytype = ($this->model('product'))->getProductIdLoai($id);
        $loai = ($this->model('typeofproduct'))->getLoaiAll();
        
        $product = [];
        
        if(!empty($getprobytype)){
            foreach($getprobytype as $pro){
                
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
            'getprobytype'=>$getprobytype,
            "allsanpham"=>$product
        ]);
    }


    function Loading(){       
        $loai = ($this->model('typeofproduct'))->getLoaiAll(); 
        $getAllHT = ($this->model('hinhthuc'))->getHTAll();
        $getHT = [];
        $randompro = ($this->model('product'))->randomProduct();
        $slpro = [];
        if(!empty($randompro)){
            foreach($randompro as $pro){
                $productimg = ($this->model('image'))->getImgIdSP($pro['idSP']);
                $img = [];
                if(!empty($productimg)){
                    foreach($productimg as $slideimage){
                        $img[] = $slideimage['tenHinh'];
                    }
                }
                $pro['listimage'] = $img;


                $hinhthuc = ($this->model('hinhthuc'))->getHinhThucById($pro['idHT']);
                $pro['tenHT'] = $hinhthuc['tenHT'];
                $slpro[]=$pro;
            }
        }
        if(!empty($getAllHT)){
            foreach($getAllHT as $pro){
                $getProductByHT = ($this->model('product'))->getProductAllLimitByHT($pro['idHT'], LENGTH);
                $sanpham = [];
                if(!empty($getProductByHT)){
                    foreach($getProductByHT as $product){
                        $productimg = ($this->model('image'))->getImgIdSP($product['idSP']);
                        $product['listimage'] = $productimg;
                        $sanpham[] = $product;
                    }
                }
                $getHT[$pro['idHT']]= $sanpham;
            }
            
        }
        $this->view("index", [
            "page"=>"trangchu",
            "css"=>"index",
            "js"=>"index",
            "allloai"=>$loai,
            "randomProduct"=>$slpro,
            "getAllHT"=>$getAllHT,
            "getHT"=>$getHT
        ]);
    }
}

?>