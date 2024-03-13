<?php
class image extends DB{
    public function themhinh (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            $data['tenHinh'] = "/nienluanCNTT/public/img/".$data['tenHinh'];

            $sql = 'INSERT INTO hinhanh 
            (tenHinh, idSP) VALUES (:tenHinh, :idSP)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }
    public function getImgIdSP(string $id) : array {
        $sql = "SELECT * FROM hinhanh WHERE idSP = ?";
        return $this->read($sql, [$id]);
        //["name" => "aa", "value" => "bb"]
        }
    
}
?>