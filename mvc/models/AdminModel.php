<?php 
class AdminModel extends DB{
    // dang ky
public function dangky (array $post) : bool{
    if(!empty($post)){
        $data = $post;
        if(array_key_exists('matKhau2', $data)){
            unset($data['matKhau2']);
        }

        $data["idAdmin"] = substr(uniqid(), 0, 8);
        $data["matKhau"] = password_hash($data["matKhau"], PASSWORD_BCRYPT);
        
        $sql = 'INSERT INTO admin (idAdmin, tenAdmin, matKhau, email, SDT) VALUES (:idAdmin, :tenAdmin, :matKhau, :email, :SDT)';
        return $this->insert($sql, $data);
    } else{
        return false;
    }
}

    // dang nhap
    public function dangnhapadmin(array $post) : bool{
        if(!empty($post)){
            $data = $post;

            //cau truy van
            $sql = "SELECT * FROM admin WHERE tenAdmin=?";
            $admin = $this->read($sql, [$data["tenAdmin"]], "single");
            
            if(!empty($admin) && password_verify($data["matKhau"], $admin["matKhau"])){
                setcookie("idAdmin", $admin["idAdmin"], time() + (86400 + 30), "/");
                setcookie("tenAdmin", $admin["tenAdmin"], time() + (86400 + 30), "/");
                
                return true;
            }
            return false;

        }
        return false;
    }
    // password_verify($data["matKhau"], $admin["matKhau"])


    
    
    // lay tat ca nguoi dung (lay gioi han)

    public function alladmin(string $idAdmin) : array {
        $sql = "SELECT * FROM admin WHERE idAdmin = ?";
        return $this->read($sql, [$idAdmin], "single");
    }
    public function getalladmin(string $idAdmin) : array {
        $sql = "SELECT * FROM admin where idAdmin != ?";
        return $this->read($sql, [$idAdmin]);
    }
    public function deleteAdminById(string $id) : bool {
        $sql = "DELETE from admin where idAdmin = ?";
        return $this->delete($sql, [$id]);
    }
    
}
?>