<?php


//cria caminho absoluto;
$path = realpath(__DIR__ . '/../App/') . DIRECTORY_SEPARATOR;


//carrega os arquivos a partir disso;

$arquivos = [
    'Router.php',
    'Controller/HomeController.php'
];


//usa foreach para carregar e checar os arquivos
foreach ($arquivos as $arquivo) {
    if (!file_exists($path . $arquivo)) {
        die("NAO ENCONTREI ESSE AQUI AMIGAO: " . $path . $arquivo);
    }
	
	//faz o require com os arquivos que ele encontrou!!!!!! ebaaaa!!!!!
	
    require_once $path . $arquivo;
}



// Definição das rotas
Router::get('/', [HomeController::class, 'index']);
Router::get('/sobre', function () {
    echo "Página Sobre Nós";
});



Router::get('/session', function () {
    var_dump($_SESSION);
});

Router::get('/admin', [AdminController::class, 'home']);
Router::get('/tabela/export', [TabelaController::class, 'export']);
Router::get('/notFound', [errorsController::class, 'notFound']);
Router::get('/500', [errorsController::class, 'error500']);

