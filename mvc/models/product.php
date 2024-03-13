<?php 
class product extends DB{
    // them sp
    public function themsp (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            
            $data["idSP"] = substr(uniqid(), 0, 8);
            $data["pNgu"] = +$data["pNgu"];
            $data["pTam"] = +$data["pTam"];
            $data["gia"] = +$data["gia"];
            
            
            $sql = 'INSERT INTO sanpham 
            (idSP, tenSP, tinh, pNgu, pTam, gia, diaChi, dienTich, idHT, moTa, idLoai, map) VALUES (:idSP, :tenSP, :tinh, :pNgu, :pTam, :gia, :diaChi, :dienTich, :idHT, :moTa, :idLoai, :map)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }

// lay tat ca san pham
    public function allsanpham() : array {
        $sql = "SELECT * FROM sanpham";
        return $this->read($sql);
    }
    
    public function randomProduct() : array {
        $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 6";
        return $this->read($sql);
    }

    public function getCountProduct() : int {
        $sql = "SELECT * FROM sanpham";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }
/**
    * xoa theo id
    *
    * @param string $id
    * @return boolean
    */
    public function deleteSPById(string $id) : bool {
        $sql = "DELETE from hinhanh where idSP = ?";
        $check = $this->delete($sql, [$id]);
        if($check) {
            $sql = "DELETE from sanpham where idSP = ?";
            return $this->delete($sql, [$id]);
        }
        return false;
    }
    


    public function updatebv(string $id, array $data) : int|false{
        $params = $data;
        $params["idSP"] = $id;
        $params["pNgu"] = +$params["pNgu"];
        $params["pTam"] = +$params["pTam"];
        $params["gia"] = +$params["gia"];
        
        $sql = "UPDATE sanpham 
        SET tenSP=:tenSP, tinh=:tinh, pNgu=:pNgu, pTam=:pTam, gia=:gia, diaChi=:diaChi, dienTich=:dienTich, idHT=:idHT,  moTa=:moTa,  idLoai=:idLoai, map=:map
        where idSP=:idSP";
        return $this->update($sql, $params);
   }

   public function getProductID(string $id) : array {
    $sql = "SELECT * FROM sanpham WHERE idSP = ?";
    return $this->read($sql, [$id], "single");
    //["name" => "aa", "value" => "bb"]
}

public function getProductIdLoai(string $id) : array {
    $sql = "SELECT * FROM sanpham WHERE idLoai = ?";
    return $this->read($sql, [$id]);
    //["name" => "aa", "value" => "bb"]
    }

/**
     * lay san pham gioi han
     * 
     * @param int $lenght so san pham can lay
     * @param int $start vi tri bat dau lay
     * @return array
     */

     public function getProductAllLimit(int $length, int $start = 0) : array {
        $sql = "SELECT * FROM `sanpham` LIMIT :length OFFSET :start ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':length', $length, \PDO::PARAM_INT);
        $query->bindParam(':start', $start, \PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
   
    public function getProductAllLimitByHT(string $idHT, int $length, int $start = 0) : array {
        $sql = "SELECT * FROM sanpham sp JOIN hinhthuc ht ON sp.idHT = ht.idHT  WHERE sp.idHT=:idHT  LIMIT :length OFFSET :start ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':idHT', $idHT);
        $query->bindParam(':length', $length, \PDO::PARAM_INT);
        $query->bindParam(':start', $start, \PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
    public function searchProduct(array $data) : array {
        $sql = "SELECT * FROM sanpham WHERE ";
        $where = [];
        $params = [];
        if(array_key_exists('tenSP', $data)){
            $where[] ="tenSP LIKE CONCAT('%', :tenSP,'%')";
            $params['tenSP'] = $data['tenSP'];
        }
        if(array_key_exists('idLoai', $data)){
            $where[] ="idLoai =:idLoai";
            $params['idLoai'] = $data['idLoai'];
        }
        if(array_key_exists('tinh', $data)){
            $where[] ="tinh =:tinh";
            $params['tinh'] = $data['tinh'];
        }
        if(array_key_exists('dienTich', $data)){
            $dienTich = explode("-", $data['dienTich']);
            $dulieu = [];
            foreach($dienTich as $value){
                $dulieu[]=+$value;
            }
            if($dulieu[0] > $dulieu[1]){
                $where[] = 'dienTich >=:start';
                $params['start'] = $dulieu[0];
            } else {
                $where[] = 'dienTich >=:start and dienTich <=:end';
                $params['start'] = $dulieu[0];
                $params['end'] = $dulieu[1];
            }
        }
        if(array_key_exists('gia', $data)){
            $gia = explode("-", $data['gia']);
            $dtprice = [];
            foreach($gia as $value){
                $dtprice[]=+$value;
            }
            if($dtprice[0] > $dtprice[1]){
                $where[] = 'gia >=:start';
                $params['gia'] = $dtprice[0];
            } else {
                $where[] = 'gia >=:start and gia <=:end';
                $params['start'] = $dtprice[0];
                $params['end'] = $dtprice[1];
            }
        }
        $sql.=implode(' and ', $where);
        return $this->read($sql, $params);
        }

        public function searchProvince(array $data) : array {
            $sql = "SELECT * FROM sanpham WHERE ";
            $where = [];
            $params = [];
            if(array_key_exists('tinh', $data)){
                $where[] ="tinh LIKE CONCAT('%', :tinh,'%')";
                $params['tinh'] = $data['tinh'];
            }
            $sql.=implode(' and ', $where);
            return $this->read($sql, $params);
        }
}