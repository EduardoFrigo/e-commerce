<?php
use App\Helpers\ViewHelper;  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce do dudu</title>
    <link href="<?= ViewHelper::asset('vendors/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?= ViewHelper::asset('vendors/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?= ViewHelper::asset('vendors/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <link href="<?= ViewHelper::asset('css/cssform.css');?>" rel="stylesheet">
    <link href="<?= ViewHelper::asset('css/cssgeral.css');?>" rel="stylesheet">
   </head>
<body>
    <div class="container-fluid" >
<nav class="navbar navbar-expand-lg border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/">Window Worker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sobre">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            
            if(isset($_SESSION['email'])){
              echo "Bem vindo, " . $_SESSION['email'];
            }else{
              echo "faça o login";
            }
            
            
            ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login">Login</a></li>
            <li><a class="dropdown-item" href="createLogin">Create Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

  </div>

</nav>
</div>
</body>
</html>