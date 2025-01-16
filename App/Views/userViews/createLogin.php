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
    <form action="createLogin" method="post">
    <h1>Crie seu login!</h1>
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="*********@gmail.com">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" placeholder="************">
    <input type="submit" value="enviaDados">
    </div>
</body>
</html>