<?php
class Database {
    private static $host = 'vidrac_hdeluca.vpshost9220.mysql.dbaas.com.br';
    private static $db   = 'vidrac_hdeluca';
    private static $user = 'vidrac_hdeluca';
    private static $pass = 'vcd@Teia#2025!';
    private static $charset = 'utf8mb4';
    private static $pdo = null;

    public static function connect() {
        if (self::$pdo === null) {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;

            try {
                self::$pdo = new PDO($dsn, self::$user, self::$pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}