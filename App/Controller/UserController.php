<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Model/UserModel.php';

class UserController{ 
    public static function login() {
        $path = realpath(__DIR__ . '/../Views/userViews/') . DIRECTORY_SEPARATOR;
        require_once $path . "login.php"; 
    }
    public static function createLogin() {
        $path = realpath(__DIR__ . '/../Views/userViews/') . DIRECTORY_SEPARATOR;
        require_once $path . "createLogin.php"; 
    }
    public static function processLogUser() {
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $user = new User();
            
            if ($userLog = $user->login($email, $senha)) {
                $_SESSION['email'] = $email;
                $_SESSION['idCliente'] = $userLog['id'];  
                header("Location: /framework/public/");
                exit();
            } else {
                echo "Email ou senha incorretos!";
            }
        } else {
            echo "Por favor, preencha os campos de email e senha.";
        }
    }
    
    public static function processCreateLog() {
        if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $user = new User();
            
            if ($user->create($nome, $email, $senha)) {
                header("Location: /framework/public");
                exit();
            } else {
                echo "Erro ao cadastrar usuário.";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    
    
}





?>