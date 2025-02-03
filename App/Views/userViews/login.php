<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center ">
            <form action="login" method="post" class="form">
                <h1 class="text-center mb-4">Entre com seu login!</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="*********@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="************" required>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </div>
                <div class="mt-3 text-center">
                    <a href="createLogin" class="text-decoration-none">Não possui login? Crie um aqui!</a>
                </div>
            </form>
        </div>
    </div>

  
</html>
