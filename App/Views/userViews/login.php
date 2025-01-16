<?php


include_once(__DIR__ . '/../partials/nav.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <form action="login" method="post">
    <h1>Entre com seu login!</h1>
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="*********@gmail.com">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" placeholder="************">
    <input type="submit" value="enviaDados">
    <a href="createLogin">Não possue login? Crie um aqui!</a>

    </form>
</div>
</body>
</html>