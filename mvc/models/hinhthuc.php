<?php
class hinhthuc extends DB{
    public function themhinhThuc (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            
            $data["idHT"] = substr(uniqid(), 0, 8);
            
            $sql = 'INSERT INTO hinhthuc 
            (idHT, tenHT) VALUES (:idHT, :tenHT)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }
    public function deletehinhThucById(string $id) : bool {
        $sql = "DELETE from hinhthuc where idHT = ?";
        return $this->delete($sql, [$id]);
    }

    public function getHTAll() : array {  
        $sql = "SELECT * FROM hinhthuc";
        return $this->read($sql);
        //[["name" => "aa", "value" => "bb"], ["name" => ..]]
    }

    public function getHinhThucById(string $id) : array {
        $sql = "SELECT * FROM hinhthuc WHERE idHT = ?";
        return $this->read($sql, [$id], 'single');
    }
    public function updateHT(string $id, array $data) : int|false{
        $params = $data;
        $params["idHT"] = $id;
        $sql = "UPDATE hinhthuc 
        SET tenHT=:tenHT
        where idHT=:idHT";
        return $this->update($sql, $params);
   }
    
}
?>