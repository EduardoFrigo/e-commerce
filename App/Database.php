<?php
class Database {
    private static $host = 'localhost';
    private static $db   = 'frame';
    private static $user = 'root';
    private static $pass = '';
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