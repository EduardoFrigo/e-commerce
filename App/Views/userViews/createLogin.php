<?php


include_once(__DIR__ . '/../partials/nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="createLogin" method="POST">
    <h1>Crie seu login!</h1>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Seu nome" required>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="*********@gmail.com" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" placeholder="************" required>

    <input type="submit" value="Enviar Dados">
</form>

    </div>
</body>
</html>