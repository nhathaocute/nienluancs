<?php


class Lienhe extends Controller{

   
   
    function Loading(){        
        $loai = ($this->model('typeofproduct'))->getLoaiAll();
        $this->view("extra", [
            "page"=>"lienhe",
            "css"=>"gioithieu",
            "js"=>"home",
            "allloai"=>$loai,
            "gioithieu"=>"Liên Hệ"
        ]);
    }
}
?>