<?php
namespace App\Config;

class Paths {
    public static function get($type) {
        $paths = [
            'development' => [
                'user_views' => '/home/edu_frigo/Documentos/meus projs/framedu/framework/App/Views/',
                'assets' => '/home/edu_frigo/Documentos/meus projs/framedu/framework/public/assets/'
            ],
            'production' => [
                'user_views' => '/var/www/myproject/App/Views/userViews/',
                'assets' => '/var/www/myproject/public/assets/'
            ]
        ];

        $env = defined('ENVIRONMENT') ? ENVIRONMENT : 'development';
        return $paths[$env][$type];
    }
}