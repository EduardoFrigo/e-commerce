<?php

use App\Helpers\ViewHelper;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Login</title>
    <link href="<?= ViewHelper::asset('css/cssform.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center ">
        <form action="createLogin" method="POST" class="form">
            <h1 class="text-center">Crie seu login!</h1>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Seu nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="*********@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" placeholder="************" required>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Criar Conta">
            </div>
        </form>
    </div>
    </div>
</body>
</html>
