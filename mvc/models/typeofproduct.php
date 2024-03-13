<?php
class typeofproduct extends DB{

    public function themloai (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            
            $data["idLoai"] = substr(uniqid(), 0, 8);
            
            $sql = 'INSERT INTO loai 
            (idLoai, tenLoai) VALUES (:idLoai, :tenLoai)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }

    public function getLoaiAll() : array {  
        $sql = "SELECT * FROM loai";
        return $this->read($sql);
        //[["name" => "aa", "value" => "bb"], ["name" => ..]]
    }

    public function deleteLoaiById(string $id) : bool {
        $sql = "DELETE from loai where idLoai = ?";
        return $this->delete($sql, [$id]);
    }
    
    public function getLoaiById(string $id) : array {
        $sql = "SELECT * FROM loai WHERE idLoai = ?";
        return $this->read($sql, [$id], 'single');
    }

    public function getTypeID(string $id) : array {
        $sql = "SELECT * FROM loai WHERE idLoai = ?";
        return $this->read($sql, [$id], "single");
    }

    public function updateLoai(string $id, array $data) : int|false{
        $params = $data;
        $params["idLoai"] = $id;
        $sql = "UPDATE loai 
        SET tenLoai=:tenLoai
        where idLoai=:idLoai";
        return $this->update($sql, $params);
   }
}
?>