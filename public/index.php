<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ENVIRONMENT', 'development');


define('ASSETS_PATH', '/home/edu_frigo/Documentos/meus projs/framedu/framework/public/assets/');


function asset($path, $version = null) {
    $fullPath = ASSETS_PATH . ltrim($path, '/');
    if (!file_exists($fullPath)) {
        throw new Exception("Asset não encontrado: " . $fullPath);
    }
    return '/assets/' . $path;
}

require_once __DIR__ . '/../Routes/web.php';

Router::dispatch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= asset('vendors/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?= asset('vendors/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?= asset('vendors/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</head>
<body>
    <main>
        <?php

        
        
        ?>
    </main>
</body>
</html>