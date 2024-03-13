<?php


class Gioithieu extends Controller{

   
   
    function Loading(){        
        $loai = ($this->model('typeofproduct'))->getLoaiAll();
        $this->view("extra", [
            "page"=>"gioithieu",
            "css"=>"gioithieu",
            "js"=>"index",
            "allloai"=>$loai,
            "gioithieu"=>"Giới Thiệu"
        ]);
    }
}
?>