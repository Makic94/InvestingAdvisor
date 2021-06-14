<?php
    class Users extends Base {

        protected function setUser($email,$username,$password) 
        {
            $sql="INSERT INTO users (email,username,password,role_id,deleted) VALUES (?,?,?,4,0)";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$email,$username,$password]);
        }

        protected function checkUname($username)
        {
            $sql="SELECT * FROM users WHERE username=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$username]);
            return $stmt->rowCount();
        }

        protected function checkEmail($email)
        {
            $sql="SELECT * FROM users WHERE email=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$email]);
            return $stmt->rowCount(); 
        }

        protected function checkPass($username)
        {
            $sql="SELECT password FROM users WHERE username=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$username]);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row['password'];
        }

        protected function checkID($username)
        {
            $sql="SELECT id FROM users WHERE username=?";
            $stms=$this->connect()->prepare($sql);
            $stms->execute([$username]);
            $row=$stms->fetch(PDO::FETCH_ASSOC);
            return $row['id'];
        }

        protected function checkRoleID($username)
        {
            $sql="SELECT role_id FROM users WHERE username=?";
            $stms=$this->connect()->prepare($sql);
            $stms->execute([$username]);
            $row=$stms->fetch(PDO::FETCH_ASSOC);
            return $row['role_id'];
        }

}
?>