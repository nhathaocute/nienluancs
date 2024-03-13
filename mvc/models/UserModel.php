<?php 

class UserModel extends DB {

public function dangky (array $post) : bool{
        if(!empty($post)){
            $data = $post;
            if(array_key_exists('matKhau2', $data)){
                unset($data['matKhau2']);
            }
            
            $data["idUser"] = substr(uniqid(), 0, 8);
            
            $data["matKhau"] = password_hash($data["matKhau"], PASSWORD_BCRYPT);
            $sql = 'INSERT INTO user (idUser, tenUser, email, matKhau, SDT) VALUES (:idUser, :tenUser, :email, :matKhau, :SDT)';
            return $this->insert($sql, $data);
        } else{
            return false;
        }
    }
    
    
        // dang nhap
        public function dangnhap(array $post) : bool{
            if(!empty($post)){
                $data = $post;
                //cau truy van
                $sql = "SELECT * FROM user WHERE tenUser=?";
                $user = $this->read($sql, [$data["tenUser"]], "single");
                
    
                if(!empty($user) && password_verify($data["matKhau"], $user["matKhau"])){
                    setcookie("idUser", $user["idUser"], time() + (86400 + 30), "/");
                    setcookie("tenUser", $user["tenUser"], time() + (86400 + 30), "/");
                    
                    return true;
                }
                return false;
    
            }
            return false;
        }

        public function getalluser() : array {
            $sql = "SELECT * FROM user";
            return $this->read($sql);
        }
        

        public function getuserbyid(string $id) : array {
            $sql = "SELECT * FROM user WHERE idUser = ?";
            return $this->read($sql, [$id], "single");
            //["name" => "aa", "value" => "bb"]
        }

        public function updateuser(array $post) : int|false{
        
            $sql = "UPDATE user 
            SET SDT=:SDT, email=:email
            where idUser=:idUser";
            return $this->update($sql,$post);
       }
    }