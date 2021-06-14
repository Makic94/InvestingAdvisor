<?php
    class UsersContr extends Users {
    
        public function createUser(){

            //declaring the data
            $data=[
                'email'=>'',
                'username'=>'',
                'password'=>'',
                'password2'=>''
            ];

            //checking if the request meth. is post
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
                $data=[
                    'email'=>$_POST['email'],
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                    'password2'=>$_POST['password2']
                ];

            //declaring the names
            $email=$data['email'];
            $username=$data['username'];
            $password=$data['password'];
            $password2=$data['password2'];

            //sanitization
            $cUsername=filter_var($username,FILTER_SANITIZE_STRING);
            $cEmail=filter_var($email,FILTER_SANITIZE_EMAIL);
            $cPassword=filter_var($password,FILTER_SANITIZE_STRING);

            //allowed characters in username
            $allowedCharacters = "/^[a-zA-Z0-9]*$/";

            //checking if valid email
            if(empty($email)) die("You must enter your email adress!");
            elseif(strpos($email, " ")==true) die("Email adress can not contain any blank space!");
            elseif((!filter_var($email, FILTER_VALIDATE_EMAIL))) die("Email adress is not the correct format!");
            elseif($cEmail!=$email) die("Email adress contains invalid characters!");
            elseif(strlen($email)>30) die("Email adress can not contain more than 30 characters!");
            elseif(trim($email)===true) die("Email adress can not contain any blank space!");
            elseif($this->checkEmail($email)!=0) die("This email adress already exists, please change.");

            //checking if valid username
            if(empty($username)) die("You must enter your username!");
            elseif(strpos($username, " ")==true) die("Username can not contain any blank space!");
            elseif(strlen($username)>20) die("Username can not contain more than 25 characters!");
            elseif(trim($username)===true) die("Username can not contain any blank space!");
            elseif(!preg_match($allowedCharacters, $username)) die("Username can only contain letters and numbers!");
            elseif($cUsername!=$username) die("Username contains invalid characters!");
            elseif($this->checkUname($username)!=0) die("This username already exists, please change.");
            }

            //checking the password
            if(empty($password)) die("You must enter the password!");
            elseif(strpos($password, " ")==true or strpos($password2, " ")) die("Password can not contain any blank space!");
            elseif(trim($password)===true or trim($password2)===true) die("Password can not contain any blank space!");
            elseif(strlen($password)<8) die("Password must be at least 8 characters long!");
            elseif(strcspn($password,'+-,.!@#$&*^?')==mb_strlen($password)) die("Password must have some of special carracters +-,!#$&*^.");
            elseif($cPassword!=$password) die("Password contains invalid characters!");
            elseif($password!=$password2) die("Passwords do not match!");

            else{
                $cPassword=password_hash($password, PASSWORD_DEFAULT);
                $this->setUser($email,$username,$cPassword);header("Location: login.php");
                }
        }

        public function checkUser(){

            //declaring the data
            $data=[
                'username'=>'',
                'password'=>''
            ];


            //checking if the request meth. is post
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
            $data=[
                'username'=>$_POST['username'],
                'password'=>$_POST['password']
            ];

            //declaring the names
            $username=$data['username'];
            $password=$data['password'];

            //sanitization
            //sanitization
            $cUsername=filter_var($username,FILTER_SANITIZE_STRING);
            $cPassword=filter_var($password,FILTER_SANITIZE_STRING);

            //allowed characters in username
            $allowedCharacters = "/^[a-zA-Z0-9]*$/";

            //checking if valid username
            if(empty($username)) die("You must enter your username!");
            elseif(strpos($username, " ")==true) die("Username can not contain any blank space!");
            elseif(strlen($username)>20) die("Username can not contain more than 25 characters!");
            elseif(trim($username)===true) die("Username can not contain any blank space!");
            elseif(!preg_match($allowedCharacters, $username)) die("Username can only contain letters and numbers!");
            elseif($cUsername!=$username) die("Username contains invalid characters!");
            elseif($this->checkUname($username)!=1) die("This username does not exist, please try again.");
            

            //checking if valid password
            if(empty($password)) die("You must enter the password!");
            elseif(strpos($password, " ")==true) die("Password can not contain any blank space!");
            elseif(trim($password)===true) die("Password can not contain any blank space!");
            elseif(strlen($password)<8) die("Password must be at least 8 characters long!");
            elseif(strcspn($password,'+-,.!@#$&*^?')==mb_strlen($password)) die("Password must have some of special carracters +-,!#$&*^.");
            elseif($cPassword!=$password) die("Password contains invalid characters!");
            elseif(!password_verify($cPassword,$this->checkPass($username))) die("Invalid password, try again.");
            
            //user login
            else 
                {
                $this->createSession($username);
                }

            }
        }


        public function createSession($username)
        {
            session_start();
            $_SESSION['id']=$this->checkID($username);
            $_SESSION['name']=$this->checkUname($username);
            $_SESSION['role_id']=$this->checkRoleID($username);
            header("Location: index.php");
        }
    
}
?>