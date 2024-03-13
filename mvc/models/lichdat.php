<?php
class lichdat extends DB{
    public function themlich (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            $data["idDL"] = substr(uniqid(), 0, 8);
            $data["trangThai"] = 0;
            $data['ngayDat'] = strtotime($post['ngayDat']);
            $current = time();
            if($data['ngayDat'] < $current) {
                return false;
            }
            $sql = 'INSERT INTO lichdat 
            (idDL, ngayDat, gioDat, trangThai, idUser, idSP) VALUES (:idDL, FROM_UNIXTIME(:ngayDat), :gioDat, :trangThai, :idUser, :idSP)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }

    public function updatelich(string $id) : int|false{
        
        $sql = "UPDATE lichdat 
        SET trangThai=1
        where idDL=?";
        return $this->update($sql,[$id]);
   }

    public function alldatlich() : array {
        $sql = "SELECT * FROM lichdat WHERE trangThai = 0";
        return $this->read($sql);
    }
    public function chuadatlich(string $id) : array {
        $sql = "SELECT * FROM lichdat WHERE idUser = ? and trangThai = 0";
        return $this->read($sql, [$id]);
    }
    public function dadatlich(string $id) : array {
        $sql = "SELECT * FROM lichdat WHERE idUser = ? and trangThai = 1";
        return $this->read($sql, [$id]);
    }
    public function locdatlich() : array {
        $sql = "SELECT * FROM lichdat";
        return $this->read($sql);
    }

    public function deleteLichById(string $id) : bool {
        $sql = "DELETE from lichdat where idDL = ?";
        return $this->delete($sql, [$id]);
    }

    public function thongke() : array {
        $sql = "SELECT DISTINCT year(ngayDat) year FROM lichdat";
        return $this->read($sql);
    }

    public function thongkenam(string $nam = '') : array {
        if(strlen($nam) == 0) {
            $sql = "SELECT * FROM lichdat WHERE trangThai = 1";
            return $this->read($sql);
        } else {
            $sql = "SELECT * FROM lichdat WHERE YEAR(ngayDat) = ? and trangThai = 1";
            return $this->read($sql, [$nam]);
        }
    }

    public function thongkenamcount(string $nam = '') : int {
        if(strlen($nam) == 0) {
            $sql = "SELECT * FROM lichdat WHERE trangThai = 1";
            return $this->read($sql, [], 'count');
        } else {
            $sql = "SELECT * FROM lichdat WHERE YEAR(ngayDat) = ? and trangThai = 1";
            return $this->read($sql, [$nam], 'count');
        }
    }

}
?>