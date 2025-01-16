<?php

class UserController{ 
    public static function login() {
        $path = realpath(__DIR__ . '/../Views/userViews/') . DIRECTORY_SEPARATOR;
        require_once $path . "login.php"; 
    }
    public static function createLogin() {
        $path = realpath(__DIR__ . '/../Views/userViews/') . DIRECTORY_SEPARATOR;
        require_once $path . "createLogin.php"; 
    }
}





?>