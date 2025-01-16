<?php
class HomeController {

    // a home controller cuida da parte publica do site, ou seja: index, erros, paginas de sobre, contato e etc

    public static function index() {
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "home.php";  
    }

    public static function sobre(){
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "sobre.php";
    }
    public static function notFound(){
        $path = realpath(__DIR__ . '/../Views') . DIRECTORY_SEPARATOR;
        require_once $path . "errors/notFound.php";
    }
}
