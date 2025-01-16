<?php
class HomeController {
    public static function index() {
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "home.php";  
    }

    public static function login() {
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "login.php"; 
    }

    public static function createLogin() {
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "createLogin.php"; 
    }
}
