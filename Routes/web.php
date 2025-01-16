<?php


//cria caminho absoluto;
$path = realpath(__DIR__ . '/../App/') . DIRECTORY_SEPARATOR;
session_start();

//carrega os arquivos a partir disso;

$arquivos = [
    'Router.php',
    'Controller/HomeController.php',
    'Controller/UserController.php'
];


//usa foreach para carregar e checar os arquivos, facilitando o debug de rota
foreach ($arquivos as $arquivo) {
    if (!file_exists($path . $arquivo)) {
        die("NAO ENCONTREI ESSE AQUI AMIGAO: " . $path . $arquivo);
    }
	
	//faz o require com os arquivos que ele encontrou!!!!!! ebaaaa!!!!!
	
    require_once $path . $arquivo;
}



// Definição das rotas
Router::get('/', [HomeController::class, 'index']);
Router::get('/sobre', [HomeController::class, 'sobre']);

Router::get('/login' , [UserController::class, 'login']);
Router::post('/login' , [UserController::class, 'processLogUser']);

Router::get('/createLogin' , [UserController::class, 'createLogin']);
Router::post('/createLogin' , [UserController::class, 'processCreateLog']);


Router::get('/session', function () {
    var_dump($_SESSION);
});

Router::get('/admin', [AdminController::class, 'home']);
Router::get('/tabela/export', [TabelaController::class, 'export']);
Router::get('/notFound', [errorsController::class, 'notFound']);
Router::get('/500', [errorsController::class, 'error500']);

