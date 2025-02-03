<?php

use App\Helpers\ViewHelper;

 include_once 'partials/nav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <h1>Olá, esse é um modelo de arquitetura de apps web que estou criando! Você esta na página: sobre.</h1>
    </div>
    <script src="<?= ViewHelper::asset('js/teste.js'); ?>"></script>
    
</body>
</html>