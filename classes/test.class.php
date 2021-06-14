<?php
class Test extends Base {
    public function getUsers($username)
        {
        $sql="SELECT password FROM users WHERE username=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $pass=$stmt->fetch(PDO::FETCH_ASSOC);
        $pass=$pass['password'];
        return $pass;
        }
    
    public function getUsersStmt($username){
        $sql = "SELECT * FROM users WHERE Username LIKE CONCAT('%',?,'%')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['username']. " " .$name['email']. "<br>";
        }
    }
}
?>