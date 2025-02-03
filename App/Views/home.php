
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <div class="container">
        <h1 class="text-center">Bem vindo ao Window Worker.</h1>
        <p class="text-center">O objetivo desse framework é fazer com que a produção de sistemas web utilizando o php seja mais rapida, personalizável e ágil, 
            usando das boas práticas de produção de código, arquitetura MVC, PHPOO e outras várias tecnologias para me auxiliar no processo</p>
        <h1><?php 
        
        if(isset($_SESSION['email'])){echo "Ola, ". $_SESSION['email'];};
        ?>    
        
        </div>
    </body>
    </html>