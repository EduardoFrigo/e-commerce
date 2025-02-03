<?php
namespace App\Helpers;

use App\Config\Paths;

class ViewHelper {
    public static function userView($filename) {
        $fullPath = Paths::get('user_views') . ltrim($filename, '/');
        
        if (!file_exists($fullPath)) {
            throw new \Exception("View não encontrada: " . $fullPath);
        }
        
        return $fullPath;
    }

    public static function asset($path) {
        $fullPath = Paths::get('assets') . ltrim($path, '/');
        
        if (!file_exists($fullPath)) {
            throw new \Exception("Asset não encontrado: " . $fullPath);
        }
        
        return '/assets/' . $path;
    }
    public static function test() {
        return "Autoload funcionando!";
    }
}