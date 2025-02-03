<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '/home/edu_frigo/Documentos/meus projs/framedu/framework/vendor/autoload.php';

// use App\Helpers\ViewHelper;

// var_dump(class_exists('App\Helpers\ViewHelper'));
// echo ViewHelper::test();


// define('ENVIRONMENT', 'development');



require_once __DIR__ . '/../Routes/web.php';

Router::dispatch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <main>
        <?php

        
        
        ?>
    </main>
</body>
</html>