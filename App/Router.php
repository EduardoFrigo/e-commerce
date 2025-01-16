<?php
class Router {
    protected static $routes = [];

    // Método para registrar rotas GET
    public static function get($uri, $callback) {
        self::$routes['GET'][$uri] = $callback;
    }

    // Método para registrar rotas POST
    public static function post($uri, $callback) {
        self::$routes['POST'][$uri] = $callback;
    }

    // Método para despachar a requisição para a rota correta
    public static function dispatch() {
        try {
            // Obtém a URI da requisição
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            error_log("URI recebida: " . $uri);  // Verifica o valor de $uri para depuração

            // Remove o prefixo /framework/public da URI
            $uri = str_replace('/framework/public', '', $uri);
            error_log("URI após str_replace: " . $uri);  // Verifica o valor após o str_replace

            // Obtém o método HTTP da requisição (GET, POST, etc)
            $method = $_SERVER['REQUEST_METHOD'];

            // Verifica se a rota para o método e URI existe
            if (isset(self::$routes[$method][$uri])) {
                // Se existir, chama a função de callback registrada
                call_user_func(self::$routes[$method][$uri]);
            } else {

                http_response_code(404);
                echo "Página não encontrada."; 
            }
        } catch (Exception $e) {
            http_response_code(500);
            echo "Erro interno do servidor: " . $e->getMessage();
        }
    }
}
