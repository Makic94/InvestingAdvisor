<?php

class SessionContr extends Users {

    public function destroySession(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
        }

    public function checkSession(){
        if(!isset($_SESSION['id'])) header("Location: login.php");
    }
}

?>